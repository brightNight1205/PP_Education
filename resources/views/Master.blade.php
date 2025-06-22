<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Programs</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/Master.css">
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
<body class="bg-gray-100">

    {{-- Include the navigation bar --}}
    @include('layouts.navigation')

    <div class="mp-container">
        <div class="mp-section">
            <h1 class="mp-heading">Master Programs</h1>
            <div class="mp-grid">
                <a href="{{ route('m_rupp') }}" class="mp-card">
                    <img src="https://upload.wikimedia.org/wikipedia/en/a/a2/RUPP_logo.PNG" alt="RUPP Logo" />
                    <h2>Royal University of Phnom Penh (RUPP)</h2>
                </a>
                <a href="{{ route('m_rule') }}" class="mp-card">
                    <img src="https://edurank.org/assets/img/uni-logos/royal-university-of-law-and-economics-logo.png" alt="RULE Logo" />
                    <h2>Royal University of Law and Economics (RULE)</h2>
                </a>
                <a href="{{ route('m_itc') }}" class="mp-card">
                    <img src="https://upload.wikimedia.org/wikipedia/en/f/f7/Institute_of_Technology_of_Cambodia_logo.png" alt="ITC Logo" />
                    <h2>Institute Technology of Cambodia (ITC)</h2>
                </a>
                <a href="{{ route('m_aeu') }}" class="mp-card">
                    <img src="https://www.aeu.edu.kh/uoe2/images/aeu.png" alt="AEU Logo" />
                    <h2>Asia Euro University (AEU)</h2>
                </a>
                <a href="{{ route('m_cadt') }}" class="mp-card">
                    <img src="https://www.cadt.edu.kh/wp-content/uploads/2023/02/cadt_square_logo_boundary.jpg" alt="CADT Logo" />
                    <h2>Cambodia Academy of Digital Technology (CADT)</h2>
                </a>
            </div>
        </div>
    </div>
</body>
</html>
