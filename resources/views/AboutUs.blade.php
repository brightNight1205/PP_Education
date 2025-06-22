<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu-Guide - About Us</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/AboutUs.css">

</head>
<body class="app-flex app-flex-col app-min-h-screen">

    {{-- Include the navigation bar --}}
    @include('layouts.navigation')

    <div class="app-container mx-auto">
        <h1 class="app-main-heading">Meet The Team</h1>

        <div class="app-team-grid">
            <!-- Team Member 1 -->
            <div class="app-team-card">
                <div class="app-profile-wrapper">
                    <img src="../Images/Tin.jpg" alt="Men Sreytin" onerror="this.onerror=null;this.src='https://placehold.co/150x150/6366f1/ffffff?text=Tin';"/>
                </div>
                <div class="app-member-details">
                    <h2>Men Sreytin</h2>
                    <p class="app-text-muted">Royal University of Phnom Penh</p>
                    <p class="app-text-muted">Major: Information Technology Engineering</p>
                    <p class="app-text-muted">Third-Year</p>
                    <p class="app-text-muted">
                        Email:
                        <a href="mailto:mensreytin1111@gmail.com" class="app-email-link">mensreytin1111@gmail.com</a>
                    </p>
                </div>
            </div>

            <!-- Team Member 2 -->
            <div class="app-team-card">
                <div class="app-profile-wrapper">
                    <img src="../Images/Tey.jpg" alt="Poeun Sreytey" onerror="this.onerror=null;this.src='https://placehold.co/150x150/6366f1/ffffff?text=Tey';"/>
                </div>
                <div class="app-member-details">
                    <h2>Poeun Sreytey</h2>
                    <p class="app-text-muted">Royal University of Phnom Penh</p>
                    <p class="app-text-muted">Major: Information Technology Engineering</p>
                    <p class="app-text-muted">Third-Year</p>
                    <p class="app-text-muted">
                        Email:
                        <a href="mailto:sreyteypoeun@gmail.com" class="app-email-link">sreyteypoeun@gmail.com</a>
                    </p>
                </div>
            </div>

            <!-- Team Member 3 -->
            <div class="app-team-card">
                <div class="app-profile-wrapper">
                    <img src="../Images/nat.jpg" alt="Leang Soknat" onerror="this.onerror=null;this.src='https://placehold.co/150x150/6366f1/ffffff?text=Nat';"/>
                </div>
                <div class="app-member-details">
                    <h2>Leang Soknat</h2>
                    <p class="app-text-muted">Royal University of Phnom Penh</p>
                    <p class="app-text-muted">Major: Information Technology Engineering</p>
                    <p class="app-text-muted">Third-Year</p>
                    <p class="app-text-muted">
                        Email:
                        <a href="mailto:leangsarysoknat@gmail.com" class="app-email-link">leangsarysoknat@gmail.com</a>
                    </p>
                </div>
            </div>

            <!-- Team Member 4 -->
            <div class="app-team-card">
                <div class="app-profile-wrapper">
                    <img src="../Images/Davit.jpg" alt="Yem Davit" onerror="this.onerror=null;this.src='https://placehold.co/150x150/6366f1/ffffff?text=Davit';"/>
                </div>
                <div class="app-member-details">
                    <h2>Yem Davit</h2>
                    <p class="app-text-muted">Royal University of Phnom Penh</p>
                    <p class="app-text-muted">Major: Information Technology Engineering</p>
                    <p class="app-text-muted">Third-Year</p>
                    <p class="app-text-muted">
                        Email:
                        <a href="mailto:davityem007@gmail.com" class="app-email-link">davityem007@gmail.com</a>
                    </p>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>

</body>

</html>
