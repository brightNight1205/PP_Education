<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Master Programs of RULE</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/Master_RULL.css">
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
            <h1 class="heading" style="color: #000;">of Royal University of Law and Economic (RULE)</h1>
            <div class="grid">
                <div class="card">
                    <img src="https://scientiabooks.in/wp-content/uploads/2023/12/law-books-300x281.jpg" alt="Master of Laws in Private Law">
                    <h2>Master of Laws in Private Law</h2>
                </div>
                <div class="card">
                    <img src="https://www.mlqu.edu.ph/wp-content/uploads/2021/11/Doctor-in-Public-Administration.jpg" alt="Master of Laws in Public Administration">
                    <h2>Master of Laws in Public Administration</h2>
                </div>
                <div class="card">
                    <img src="https://img.freepik.com/premium-vector/printed-paper-form-with-pen-sign-us-dollar-banknotes-as-financial-money-loan-mortgage-bu_926199-3665072.jpg" alt="Master of Business in Management">
                    <h2>Master of Business in Management</h2>
                </div>
                <div class="card">
                    <img src="https://thumbs.dreamstime.com/b/accounting-business-finance-vector-logo-accounting-business-finance-vector-logo-template-227513724.jpg" alt="Master of Business in Finance">
                    <h2>Master of Business in Finance</h2>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
