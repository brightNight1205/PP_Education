<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\Rating;

class RatingController extends Controller
{
    /**
     * Store or update a rating.
     */
    public function store(Request $request)
    {
        try {
            $request->validate([
                'Score' => 'required|integer|min:1|max:5',
                'UniversityID' => 'required|integer|exists:universities,UniversityID',
            ]);

            Rating::updateOrCreate(
                ['UserID' => Auth::id(), 'UniversityID' => $request->UniversityID],
                ['Score' => $request->Score]
            );

            return response()->json(['message' => 'Rating saved successfully']);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to save rating'], 500);
        }
    }

    /**
     * Get the user's rating for a university.
     */
    public function status($universityId)
    {
        try {
            $rating = Rating::where('UserID', Auth::id())
                ->where('UniversityID', $universityId)
                ->first();

            return response()->json([
                'score' => $rating ? $rating->Score : 0,
            ]);
        } catch (\Exception $e) {
            return response()->json(['error' => 'Failed to fetch rating'], 500);
        }
    }
}