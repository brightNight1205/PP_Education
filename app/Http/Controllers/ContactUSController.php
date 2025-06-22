<?php

namespace App\Http\Controllers;

use App\Models\ContactUS;
use Illuminate\Http\Request;
use App\Models\University;
use App\Models\Major;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;

class ContactUSController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function create()
    {
        $universities = University::all();
         
    return view('ContactUs', compact('universities'));
    }

    public function store(Request $request)
{
    $request->validate([
        'email' => 'required|email',  // You can remove this if UserID is the logged-in user
        'university' => 'required|exists:universities,UniversityID',
        'major' => 'required|exists:majors,MajorID',
        'description' => 'required|string|max:1000',
    ]);

    ContactUS::create([
        'MajorID' => $request->major,
        'UniversityID' => $request->university,
        'Description' => $request->description,
        'UserID' => Auth::id(), // Get logged-in user ID
    ]);

    return redirect()->route('contact.create')->with('success', 'Thank you for contacting us!');
}

    public function getMajors($universityId)
    {
        $majors = Major::where('UniversityID', $universityId)->get();
        return response()->json($majors);
    }
}
