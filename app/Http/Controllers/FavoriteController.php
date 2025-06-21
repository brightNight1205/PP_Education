<?php

namespace App\Http\Controllers;

use App\Models\Favorite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class FavoriteController extends Controller
{
    /**
     * Toggle favorite status for a university.
     */
    public function toggle(Request $request)
    {
        $request->validate([
            'UniversityID' => 'required|exists:universities,UniversityID',
        ]);

        $userId = Auth::id();
        $universityId = $request->UniversityID;

        $favorite = Favorite::where('UserID', $userId)
                            ->where('UniversityID', $universityId)
                            ->first();

        if ($favorite) {
            $favorite->delete();
            return response()->json([
                'isFavorited' => false,
                'message' => 'University removed from favorites!',
            ]);
        }

        Favorite::create([
            'UserID' => $userId,
            'UniversityID' => $universityId,
        ]);

        return response()->json([
            'isFavorited' => true,
            'message' => 'University added to favorites!',
        ]);
    }

    /**
     * Get the favorite status for a university.
     */
    public function status($universityId)
    {
        if (!Auth::check()) {
            return response()->json(['isFavorited' => false]);
        }

        $isFavorited = Favorite::where('UserID', Auth::id())
                               ->where('UniversityID', $universityId)
                               ->exists();

        return response()->json(['isFavorited' => $isFavorited]);
    }
}