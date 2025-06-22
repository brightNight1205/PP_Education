<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;
use App\Models\Feedback;
use Faker\Provider\Base;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Log;





class FeedbackController extends Controller
{
    // Only authenticated users can access these methods
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Display a listing of all feedbacks (for admin or user view).
     */
    public function index()
    {
        $feedbacks = Feedback::with('user')->latest()->get();
        return view('feedback.index', compact('feedbacks'));
    }

    /**
     * Show the form for creating a new feedback (optional if you already have a Blade form).
     */
    public function create()
    {
        return view('feedback.create');
    }

    /**
     * Store a newly submitted feedback.
     */
    public function store(Request $request)
    {
        $request->validate([
            'Message' => 'required|string',
            'UserID' => 'required|exists:users,id',
        ]);

        Feedback::create([
            'Message' => $request->Message,
            'UserID' => $request->UserID,
        ]);

        return redirect()->back()->with('success', 'Thank you for your feedback!');
    }

    /**
     * Display a specific feedback entry.
     */
    public function show(Feedback $feedback)
    {
        return view('feedback.show', compact('feedback'));
    }

    /**
     * Show the form for editing a specific feedback.
     */
    public function edit(Feedback $feedback)
    {
        return view('feedback.edit', compact('feedback'));
    }

    /**
     * Update a specific feedback in the database.
     */
    public function update(Request $request, Feedback $feedback)
    {
        $request->validate([
            'Message' => 'required|string',
        ]);

        $feedback->update([
            'Message' => $request->Message,
        ]);

        return redirect()->route('feedback.index')->with('success', 'Feedback updated successfully!');
    }

    /**
     * Remove a specific feedback entry.
     */
    public function destroy(Feedback $feedback)
    {
        $feedback->delete();

        return redirect()->back()->with('success', 'Feedback deleted successfully.');
    }
}
