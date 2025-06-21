<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Feedback Form</title>
  <link rel="stylesheet" href="/CSS/Feedback.css">
</head>
<body>
  <div class="form-container">
    <h1>We Value Your Feedback!</h1>

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
    <label for="feedback">Your Feedback</label>
    <textarea name="Message" placeholder="Your feedback..." required></textarea>

    <input type="hidden" name="UserID" value="{{ Auth::id() }}">

    <button type="submit">Submit</button>
</form>

  </div>

   <script src="/Javascript/Feedback.js"></script>


</body>
</html>
