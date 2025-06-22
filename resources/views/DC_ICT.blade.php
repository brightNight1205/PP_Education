<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctoral Programs - ITC</title>
    <link rel="stylesheet" href="/CSS/DC_ICT.css">
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
    @include('layouts.navigation')

<div class="itc-container">
    <h1 class="itc-heading">Doctoral Programs</h1>
    <h2 class="itc-heading"><span>of Institute of Technology of Cambodia</span></h2>

    <div class="itc-grid">
        <div class="itc-card">
            <img src="../Images/phd.Emergy.avif" alt="Energy Technology and Management" />
            <h2>Ph.D. of Energy Technology and Management</h2>
        </div>

        <div class="itc-card">
            <img src="../Images/food_tech.jpg" alt="Food Technology and Nutrition" />
            <h2>Ph.D. of Food Technology and Nutrition</h2>
        </div>

        <div class="itc-card">
            <img src="../Images/science_and_structure.png" alt="Materials Science and Structures" />
            <h2>Ph.D. of Materials Science and Structures</h2>
        </div>

        <div class="itc-card">
            <img src="../Images/mechatronics.webp" alt="Mechatronics and IT" />
            <h2>Ph.D. of Mechatronics and Information Technology</h2>
        </div>

        <div class="itc-card">
            <img src="../Images/water_and_inviroment.jpg" alt="Water and Environment" />
            <h2>Ph.D. of Water and Environment</h2>
        </div>
    </div>
</div>

</body>
</html>
