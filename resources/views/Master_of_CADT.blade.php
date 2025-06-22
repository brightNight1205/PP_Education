<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Programs of CADT</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/Master_CADT.css">
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

    <div class="container">
        <div class="section-padding">
            <h1 class="heading">Master Programs</h1>
            <h1 class="heading" style="color: #000;">of Cambodia Academy of Digital Technology (CADT)</h1>
            <div class="grid">
                <div class="card">
                    <img src="https://imgcdnblog.carbay.com/wp-content/uploads/2022/05/24111231/image-18-11.jpg" alt="Master of Computer Science">
                    <h2>Master of Computer Science</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
