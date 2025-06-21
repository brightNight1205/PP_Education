<?php

namespace App\Http\Controllers;

use App\Models\University;
use App\Models\Rating;
use App\Models\Favorite;
use Illuminate\Http\Request;

class UniversityController extends Controller
{
    public function index()
    {
        $universities = University::all()->map(function ($university) {
            $university->average_rating = Rating::where('UniversityID', $university->UniversityID)
                ->avg('Score') ?? 0;
            $university->favorite_count = Favorite::where('UniversityID', $university->UniversityID)
                ->count();
            return $university;
        });

        return view('HomePage', compact('universities'));
    }

    public function getStats($universityId)
    {
        $university = University::findOrFail($universityId);
        $average_rating = Rating::where('UniversityID', $universityId)->avg('Score') ?? 0;
        $favorite_count = Favorite::where('UniversityID', $universityId)->count();

        return response()->json([
            'average_rating' => number_format($average_rating, 1),
            'favorite_count' => $favorite_count,
        ]);
    }
  


    /**
     * Display the specified resource.
     */
// // In your page controller method
// public function showRupp()
// {
//     $universityId = 1;
//     $userId = Auth::id();
    
//     $isFavorited = false;
//     if ($userId) {
//         $isFavorited = Favorite::where([
//             'UserID' => $userId,
//             'UniversityID' => $universityId
//         ])->exists();
//     }

//     $favoriteCount = Favorite::where('UniversityID', $universityId)->count();

//     return view('Rupp', [
//         'isFavorited' => $isFavorited,
//         'favoriteCount' => $favoriteCount
//     ]);
// }


// app/Http/Controllers/UniversityController.php
// public function show($id)
// {
//     $university = University::findOrFail($id);

//     $isFavoritedByUser = false;

//     if (Auth::check()) {
//         $isFavoritedByUser = \App\Models\Favorite::where('UserID', Auth::id())
//             ->where('UniversityID', $university->UniversityID)
//             ->exists();
//     }

//     return view('universities.show', compact('university', 'isFavoritedByUser'));
// }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(University $university)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, University $university)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(University $university)
    {
        //
    }
}
