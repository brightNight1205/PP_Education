<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu-Guide - Feedback</title>
    <link rel="stylesheet" href="/CSS/Feedback.css">
    <!-- Import Alpine.js and custom CSS -->
    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <link rel="stylesheet" href="/CSS/Homepage.css">
    <link rel="stylesheet" href="/CSS/HomePage.css">
    <script src="/Javascript/ContactUs.js"></script>
    <script src="/Javascript/HomePage.js"></script>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
</head>
<body>

    {{-- Include the navigation bar --}}
    @include('layouts.navigation')

  <div class="form-container">
    <h1 class="title-feedback">We Value Your Feedback!</h1>

{{-- @if (session('success'))
    <div class="alert-success">
        <span class="alert-icon">&#10003;</span>
        {{ session('success') }}
    </div>
@endif --}}
@if (session('success'))
    <div class="notification-panel success">
        <span class="icon">&#10004;</span>
        <span class="message">{{ session('success') }}</span>
        <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
    </div>
@endif


<form method="POST" action="{{ route('feedback.store') }}">
    @csrf
    <label class="lable-feedback" for="feedback">Your Feedback</label>
    <textarea name="Message" placeholder="Your feedback..." required></textarea>

    <input class="input-feedback"  type="hidden" name="UserID" value="{{ Auth::id() }}">

    <button class="btn-feedback" type="submit">Submit</button>
</form>

  </div>

   <script src="/Javascript/Feedback.js"></script>


</body>
</html>
