<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Programs of ITC</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/Master_ICT.css">
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
            </a>
            <h1 class="heading">Master Programs</h1>
            <h1 class="heading" style="color: #000;">of Institute Technology of Cambodia (ITC)</h1>
            <div class="grid">
                <div class="card">
                    <img src="https://img.freepik.com/premium-vector/gear-tree-vector-logo-design-template_825834-1841.jpg" alt="Master of Agro-industrial Engineering ">
                    <h2>Master of Agro-industrial Engineering </h2>
                </div>
                <div class="card">
                    <img src="https://st4.depositphotos.com/17797916/20051/v/450/depositphotos_200515610-stock-illustration-laptop-network-logo-icon-design.jpg" alt="Master of Computer Science">
                    <h2>Master of Computer Science</h2>
                </div>
                <div class="card">
                    <img src="https://www.rapidbrains.com/assets/img/services/rapidbrains-data%20scientist.webp" alt="Master of Data Science">
                    <h2>Master of Data Science</h2>
                </div>
                <div class="card">
                    <img src="https://media.istockphoto.com/id/1304646538/vector/vector-icon-of-the-tractor-loading-truck-logo-construction-and-special-equipment-tractor.jpg?s=612x612&w=0&k=20&c=whdEb4MCjAK89athK42B1EypCj-nGppzAp5ZT8wvHEk=" alt="Master of Transport Engineering">
                    <h2>Master of Transport Engineering</h2>
                </div>
                <div class="card">
                    <img src="https://static.vecteezy.com/system/resources/thumbnails/010/433/533/small/strategic-energy-plan-concept-icon-building-energy-strategy-abstract-idea-thin-line-illustration-reduce-carbon-footprint-isolated-outline-drawing-editable-stroke-vector.jpg" alt="Master of Energy Technology and Management Engineering">
                    <h2>Master of Energy Technology and Management Engineering</h2>
                </div>
                <div class="card">
                    <img src="https://thumbs.dreamstime.com/b/structural-engineering-concept-icon-building-support-structure-infrastructure-construction-civil-idea-thin-line-illustration-205642814.jpg" alt="Master of Materials and Structural Engineering">
                    <h2>Master of Materials and Structural Engineering</h2>
                </div>
                <div class="card">
                    <img src="https://encrypted-tbn3.gstatic.com/images?q=tbn:ANd9GcTdCjcFg7QKmQkbeZyi1t8-bNKg7RHLQirr2ZMsZRbcE5SgG3r3" alt="Master of Mechatronics, Information and Communication Engineering">
                    <h2>Master of Mechatronics, Information and Communication Engineering</h2>
                </div>
                <div class="card">
                    <img src="https://img.freepik.com/premium-vector/unique-water-drop-green-leaf-logo-fresh-ecofriendly-symbol-sustainable-solutions_579306-41387.jpg" alt="Master of Water and Environment Engineering">
                    <h2>Master of Water and Environment Engineering</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
