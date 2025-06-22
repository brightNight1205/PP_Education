<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Doctoral Programs</title>
    <link rel="stylesheet" href="/CSS/DC_Program.css">
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

    <div class="dp-container">
        <h1 class="dp-heading">Doctoral Programs</h1>

        <div class="dp-grid">
            <div class="dp-card">
                <a href="{{ route('dc_rupp') }}">
                    <img src="../Images/Rupp_logo.png" alt="Royal University of Phnom Penh" />
                </a>
                <p>Royal University of Phnom Penh (RUPP)</p>
            </div>

            <div class="dp-card">
                <a href="{{ route('dc_itc') }}">
                    <img src="../Images/Institute_of_Technology_of_Cambodia_logo.png" alt="Institute Technology of Cambodia" />
                </a>
                <p>Institute Technology of Cambodia (ITC)</p>
            </div>

            <div class="dp-card">
                <a href="{{ route('dc_aeu') }}">
                    <img src="../Images/aeu.png" alt="Asia Euro University" />
                </a>
                <p>Asia Euro University (AEU)</p>
            </div>
        </div>
    </div>

</body>
</html>
