<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Royal University of Law and Economics</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/CSS/RULL.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="flex flex-col">
    <div class="main-container">
        <!-- University Header -->
        <header class="university-header">
            <img src="https://edurank.org/assets/img/uni-logos/royal-university-of-law-and-economics-logo.png" alt="Royal University of Law and Economics Logo" class="logo" onerror="this.onerror=null;this.src='https://placehold.co/100x100/6366F1/FFFFFF?text=RULE';"/>
            <h1>Royal University of Law and Economics (RULE)</h1>
        </header>

        <!-- Main Content (Images and Description) -->
        <section class="image-gallery">
            <div class="image-item-lg">
                <img src="https://www.shutterstock.com/image-photo/baby-betel-nut-falling-under-600nw-2278237083.jpg" alt="University Building 1" onerror="this.onerror=null;this.src='https://placehold.co/400x300/e0f2fe/1e3a8a?text=RULE+Building+1';"/>
            </div>
            <div class="image-item-lg">
                <img src="https://foodstem-euproject.itc.edu.kh/wp-content/uploads/2021/05/Web-URDSE2-1024x576.jpg" alt="University Campus" onerror="this.onerror=null;this.src='https://placehold.co/800x400/e0f2fe/1e3a8a?text=RULE+Campus';"/>
                <div class="image-description">
                    <p>
                        <span class="highlight">The Royal University of Law and Economics (RULE)</span> is a prominent higher education institution in Phnom Penh, Cambodia,
                        specializing in the fields of law, economics, business, and public
                        administration.
                    </p>
                </div>
            </div>
        </section>
        <p class="additional-info-text">
            Established in 1949, RULE is one of the oldest universities in Cambodia
            and has a long-standing reputation for providing quality education,
            particularly in legal and economic disciplines.
        </p>

        <!-- University Overview and Contact Info -->
        <section class="university-overview">
            <!-- User Interaction (Rating and Favorite) -->
 <div class="user-interaction-section p-8 bg-white rounded-lg shadow-lg border border-gray-200 mt-8">
        <h3 class="section-title text-3xl font-bold text-gray-900 mb-6">Rate & Engage</h3>

        <div class="rating-section mb-4">
            <span class="text-lg font-medium text-gray-800 mr-2">Your Rating:</span>
            <div class="rating-container flex items-center space-x-1 cursor-pointer">
                <div class="star text-4xl text-gray-400 hover:text-yellow-500 transition-colors duration-200" data-id="1">☆</div>
                <div class="star text-4xl text-gray-400 hover:text-yellow-500 transition-colors duration-200" data-id="2">☆</div>
                <div class="star text-4xl text-gray-400 hover:text-yellow-500 transition-colors duration-200" data-id="3">☆</div>
                <div class="star text-4xl text-gray-400 hover:text-yellow-500 transition-colors duration-200" data-id="4">☆</div>
                <div class="star text-4xl text-gray-400 hover:text-yellow-500 transition-colors duration-200" data-id="5">☆</div>
                <div class="rating-text ml-4 text-xl font-semibold text-gray-800">Rating: 0/5</div>
            </div>
        </div>
        
        <div class="favorite-section flex items-center mt-3 cursor-pointer">
            <span class="favorite-icon text-5xl text-red-500 hover:text-red-700 transition-colors duration-200" data-favorited="false">♡</span>
            <span class="text-xl font-medium text-gray-800 ml-2">Favorite</span>
            <span id="favorites-count" class="text-xl font-medium text-gray-800 ml-2"></span>
        </div>
    </div>
            <!-- Basic Info Card -->
            <div class="overview-card">
                <h3>General Information</h3>
                <div class="overview-item">
                    <strong>Found:</strong> <span>1949</span>
                </div>
                <div class="overview-item">
                    <strong>Acronym:</strong> <span>RULE</span>
                </div>
                <div class="overview-item">
                    <strong>Official Name:</strong>
                    <span class="ml-2">សាកលវិទ្យាល័យភូមិន្ទនីតិសាស្ត្រ និងវិទ្យាសាស្ត្រសេដ្ឋកិច្ច</span>
                </div>
                <div class="overview-item">
                    <strong>Latin Name:</strong>
                    <span class="ml-2">Royal University of Law and Economics</span>
                </div>
                <div class="overview-item">
                    <strong>Webpage:</strong>
                    <a href="https://rule.edu.kh/index.html" target="_blank" rel="noopener noreferrer" class="ml-2">https://rule.edu.kh/index.html</a>
                </div>
            </div>

            <!-- Contact Info Card -->
            <div class="overview-card contact-info-section">
                <h3>Contact Information</h3>
                <div class="contact-detail">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Address:</strong><br>
                        Russian Federation Boulevard, Tuol Kork District<br>
                        Phnom Penh 12156, Cambodia
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-globe"></i>
                    <div>
                        <strong>Map:</strong><br>
                        <a href="https://maps.app.goo.gl/R7ABsTijzJt2po9e8" target="_blank" rel="noopener noreferrer">View on map</a>
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <strong>Phone:</strong><br>
                        +855(23) 214 703
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Email:</strong><br>
                        <a href="mailto:info@rule.edu.kh">info@rule.edu.kh</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Degree Level Section -->
        <section class="degree-level-section">
            <div class="degree-level-header">
                Degree Level
            </div>
            <div class="degree-title-item">
                <span class="dot"></span>
                <h2>Bachelor Programs</h2>
            </div>
            
            <div class="faculty-container-grid">
                <!-- Faculty of Law -->
                <div class="faculty-card">
                    <h3>Faculty of Law</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Law</li>
                    </ul>
                </div>
                <!-- Faculty of Public Administration -->
                <div class="faculty-card">
                    <h3>Faculty of Public Administration</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Public Administration</li>
                        <li><span class="checkmark">&#10003;</span> Bachelor of International Relations</li>
                    </ul>
                </div>
                <!-- Faculty of Economics and Management -->
                <div class="faculty-card">
                    <h3>Faculty of Economics and Management</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Banking and Finance</li>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Accounting</li>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Development Economics</li>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Tourism and Hospitality Management</li>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Business Management</li>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Informatics Economics</li>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Information Technology</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Graduate Programs Section -->
        <section class="graduate-programs-section">
            <div class="degree-title-item">
                <span class="dot" style="background-color: #ef4444;"></span>
                <h2>Graduate Programs</h2>
            </div>
            <div class="program-links">
                <a href="{{ route('m_rule') }}">Master's Degree</a>
                {{-- <a href="#">Ph.D.'s Degree</a> --}}
            </div>
        </section>
    </div>

   <script src="/Javascript/RULL.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const universityId = 3; // Rule UniversityID fixed
            const stars = document.querySelectorAll('.star');
            const ratingText = document.querySelector('.rating-text');
            const favoriteIcon = document.querySelector('.favorite-icon');
            const favoritesCount = document.getElementById('favorites-count');
            const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

            // Helper to fill stars UI based on rating
            function fillStars(score) {
                stars.forEach(star => {
                    star.innerHTML = Number(star.dataset.id) <= score ? '★' : '☆';
                    star.classList.toggle('text-yellow-400', Number(star.dataset.id) <= score);
                    star.classList.toggle('text-gray-400', Number(star.dataset.id) > score);
                });
                ratingText.innerText = `Rating: ${score}/5`;
            }

            // Initialize rating state
            function initializeRating() {
                fetch(`/ratings/status/${universityId}`, {
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                })
                    .then(res => res.json())
                    .then(data => {
                        if (data.score) {
                            fillStars(data.score);
                        }
                    })
                    .catch(() => console.error('Failed to fetch rating.'));
            }

            // Handle rating click
            stars.forEach(star => {
                star.addEventListener('click', () => {
                    const score = star.dataset.id;

                    fetch('/ratings', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': csrfToken,
                        },
                        body: JSON.stringify({
                            Score: score,
                            UniversityID: universityId,
                        }),
                    })
                        .then(res => res.json())
                        .then(data => {
                            fillStars(score);
                            alert(data.message);
                        })
                        .catch(() => alert('Failed to save rating.'));
                });
            });

            // Initialize favorite state and count
           function initializeFavorite() {
                fetch(`/favorites/status/${universityId}`, {
                    method: 'GET',
                    headers: {
                        'X-CSRF-TOKEN': csrfToken,
                        'Accept': 'application/json',
                    },
                })
                    .then(res => res.json())
                    .then(data => {
                        favoriteIcon.innerHTML = data.isFavorited ? '♥' : '♡';
                        favoriteIcon.dataset.favorited = data.isFavorited;
                    })
                    .catch(() => console.error('Failed to fetch favorite status.'));
            }

            // Handle favorite toggle click
            favoriteIcon.addEventListener('click', () => {
                fetch('/favorites/toggle', {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-CSRF-TOKEN': csrfToken,
                    },
                    body: JSON.stringify({
                        UniversityID: universityId,
                    }),
                })
                    .then(res => res.json())
                    .then(data => {
                        favoriteIcon.innerHTML = data.isFavorited ? '♥' : '♡';
                        favoriteIcon.dataset.favorited = data.isFavorited;
                        alert(data.message);
                    })
                    .catch(() => alert('Failed to toggle favorite.'));
            });

            // Initialize on page load
            initializeRating();
            initializeFavorite();
        });
    </script>
</body>
</html>