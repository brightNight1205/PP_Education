<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Doctoral Programs - ITC</title>
   <link rel="stylesheet" href="/CSS/DC_AEU.css">
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

<div class="aeu-container">

    @include('layouts.navigation')

    <h1 class="aeu-title">Doctoral Programs</h1>
    <h2 class="aeu-subtitle">of Asia Euro University</h2>

    <div class="aeu-programs">
        <div class="aeu-card">
            <img src="../Images/law_aeu.webp" alt="Ph.D. of Laws">
            <p>Ph.D. of Laws</p>
        </div>

        <div class="aeu-card">
            <img src="../Images/Business_aeu.png" alt="Ph.D. of Business Administration">
            <p>Ph.D. of Business Administration</p>
        </div>

        <div class="aeu-card">
            <img src="../Images/economic.png" alt="Ph.D. of Economic Science">
            <p>Ph.D. of Economic Science</p>
        </div>

        <div class="aeu-card">
            <img src="../Images/internation_relate_aeu.jpg" alt="Ph.D. of International Relations">
            <p>Ph.D. of International Relations</p>
        </div>

        <div class="aeu-card">
            <img src="../Images/Doctor-in-Public-Administration.jpg" alt="Ph.D. of Public Administration">
            <p>Ph.D. of Public Administration</p>
        </div>
    </div>
</div>

</body>
</html>
