<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Royal University of Phnom Penh</title>

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>

    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet" />

    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <link rel="stylesheet" href="/CSS/RUPP.css" />

    <!-- CSRF Token for AJAX -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="flex flex-col">

    
    <div class="main-container">
        <!-- University Header -->
        <header class="university-header">
            <img
                src="https://upload.wikimedia.org/wikipedia/km/e/ee/Rupp_logo.png"
                alt="Royal University of Phnom Penh Logo"
                class="logo"
            />
            <h1>Royal University Of Phnom Penh</h1>
        </header>

        <!-- Main Content (Images and Description) -->
        <section class="image-gallery">
            <div class="image-item-lg">
                <img
                    src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQkTO25MNnnBtozBZ4ztD149GWqYq0guznJ9g&s"
                    alt="University Building 1"
                    onerror="this.onerror=null;this.src='https://placehold.co/400x300/e0f2fe/1e3a8a?text=University+Building+1';"
                />
            </div>
            <div class="image-item-lg">
                <img
                    src="https://cjbar.rupp.edu.kh/public/journals/1/slider_image_jpg4pJ577.jpg"
                    alt="University Campus"
                    onerror="this.onerror=null;this.src='https://placehold.co/800x400/e0f2fe/1e3a8a?text=University+Campus';"
                />
                <div class="image-description">
                    <p>
                        <span class="highlight">The Royal University of Phnom Penh (RUPP)</span> is Cambodia’s largest and oldest university, founded in
                        1960. It initially began as the Royal Khmer University and has undergone various transformations.
                    </p>
                </div>
            </div>
        </section>
        <p class="additional-info-text">
            Today, it plays a key role in Cambodia's higher education system, offering undergraduate, postgraduate, and research programs across
            several faculties.
        </p>

        <!-- University Overview and Contact Info -->
        {{-- <section class="university-overview">
            <!-- User Interaction (Rating and Favorite) -->
            <div class="user-interaction-section p-6 bg-white rounded-lg shadow-md">
                <h3 class="section-title text-2xl font-bold text-gray-800 mb-4">Rate & Engage</h3>
                 <span class="text-xl font-medium text-gray-700 mr-2">Your Rating:</span>
                <div class="rating-container flex items-center space-x-1 cursor-pointer">
                    <div class="star text-3xl text-gray-400 hover:text-yellow-500 transition-colors duration-200" data-id="1">☆</div>
                    <div class="star text-2xl" data-id="2">☆</div>
                    <div class="star text-2xl" data-id="3">☆</div>
                    <div class="star text-2xl" data-id="4">☆</div>
                    <div class="star text-2xl" data-id="5">☆</div>
                    <div class="rating-text ml-3 text-lg font-semibold">Rating: 0/5</div>
                </div>

                <div class="favorite-container mt-4 flex items-center space-x-2 cursor-pointer">
                    <span class="favorite-icon text-3xl text-red-500" data-favorited="false">♡</span>
                    <span id="favorites-count" class="text-xl"></span>
                </div>
            </div> --}}

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
            <div class="overview-card mt-8 shadow-lg border border-gray-200">
                <h3>General Information</h3>
                <div class="overview-item">
                    <strong>Found:</strong> <span>1960</span>
                </div>
                <div class="overview-item">
                    <strong>Acronym:</strong> <span>RUPP</span>
                </div>
                <div class="overview-item">
                    <strong>Official Name:</strong>
                    <span class="ml-2">ROYAL UNIVERSITY OF PHNOM PENH</span>
                </div>
                <div class="overview-item">
                    <strong>Latin Name:</strong>
                    <span class="ml-2">សាកលវិទ្យាល័យភូមិន្ទភ្នំពេញ</span>
                </div>
                <div class="overview-item">
                    <strong>Webpage:</strong>
                    <a href="https://www.rupp.edu.kh/" target="_blank" rel="noopener noreferrer" class="ml-2">https://www.rupp.edu.kh/</a>
                </div>
            </div>

            <!-- Contact Info Card -->
            <div class="overview-card contact-info-section mt-8">
                <h3>Contact Information</h3>
                <div class="contact-detail flex items-start space-x-3">
                    <i class="fas fa-map-marker-alt mt-1"></i>
                    <div>
                        <strong>Address:</strong><br />
                        Russian Federation Boulevard, Tuol Kork District<br />
                        Phnom Penh 12156, Cambodia
                    </div>
                </div>
                <div class="contact-detail flex items-start space-x-3 mt-3">
                    <i class="fas fa-globe mt-1"></i>
                    <div>
                        <strong>Map:</strong><br />
                        <a
                            href="https://www.google.com/maps/place/Royal+University+of+Phnom+Penh/@11.568676,104.8881614,17z/data=!3m1!4b1!4m6!3m5!1s0x3109519fe4077d69:0x20138e822e434660!8m2!3d11.568676!4d104.8907417!16s%2Fm%2F0278m39?entry=ttu&g_ep=EgoyMDI1MDYxMS4wIKXMDSoASAFQAw%3D%3D"
                            target="_blank"
                            rel="noopener noreferrer"
                            >View on map</a
                        >
                    </div>
                </div>
                <div class="contact-detail flex items-start space-x-3 mt-3">
                    <i class="fas fa-phone-alt mt-1"></i>
                    <div>
                        <strong>Phone:</strong><br />
                        +855(23) 884 523 | +855(23) 880 116
                    </div>
                </div>
                <div class="contact-detail flex items-start space-x-3 mt-3">
                    <i class="fas fa-envelope mt-1"></i>
                    <div>
                        <strong>Email:</strong><br />
                        <a href="mailto:info@rupp.edu.kh">info@rupp.edu.kh</a>
                    </div>
                </div>
            </div>
        </section>

        <!-- Degree Level Section -->
        <section class="degree-level-section mt-8">
            <div class="degree-level-header">Degree Level</div>
            <div class="degree-title-item">
                <span class="dot"></span>
                <h2>Bachelor Programs</h2>
            </div>

            <div class="faculty-container-grid grid grid-cols-1 md:grid-cols-3 gap-6">
                <!-- Faculty of Science -->
                <div class="faculty-card">
                    <h3>Faculty of Science</h3>
                    <ul>
                        <li><span class="checkmark">✓</span> Department of Biology</li>
                        <li><span class="checkmark">✓</span> Department of Chemistry</li>
                        <li><span class="checkmark">✓</span> Department of Computer Science</li>
                        <li><span class="checkmark">✓</span> Department of Environmental Science</li>
                        <li><span class="checkmark">✓</span> Department of Mathematics</li>
                        <li><span class="checkmark">✓</span> Department of Physics</li>
                    </ul>
                </div>

                <!-- Faculty of Social Sciences and Humanities -->
                <div class="faculty-card">
                    <h3>Faculty of Social Sciences and Humanities</h3>
                    <ul>
                        <li><span class="checkmark">✓</span> Department of Geography</li>
                        <li><span class="checkmark">✓</span> Department of History</li>
                        <li><span class="checkmark">✓</span> Department of Khmer Literature</li>
                        <li><span class="checkmark">✓</span> Department of Media and Communication</li>
                        <li><span class="checkmark">✓</span> Department of Philosophy</li>
                        <li><span class="checkmark">✓</span> Department of Psychology</li>
                        <li><span class="checkmark">✓</span> Department of Sociology</li>
                        <li><span class="checkmark">✓</span> Department of Social Work</li>
                        <li><span class="checkmark">✓</span> Department of Tourism</li>
                    </ul>
                </div>

                <!-- Faculty of Engineering -->
                <div class="faculty-card">
                    <h3>Faculty of Engineering</h3>
                    <ul>
                        <li><span class="checkmark">✓</span> Department of Information Technology Engineering</li>
                        <li><span class="checkmark">✓</span> Department of Telecommunication and Electronic Engineering</li>
                        <li><span class="checkmark">✓</span> Department of Bioengineering</li>
                        <li><span class="checkmark">✓</span> Department of Automation and Supply Chain Systems Engineering</li>
                        <li><span class="checkmark">✓</span> Department of Environmental Engineering</li>
                    </ul>
                </div>
            </div>
        </section>

        <!-- Graduate Programs Section -->
        <section class="graduate-programs-section mt-8">
            <div class="degree-title-item">
                <span class="dot" style="background-color: #ef4444;"></span>
                <h2>Graduate Programs</h2>
            </div>
            <div class="program-links flex space-x-4">
                <a href="{{ route('m_rupp') }}" class="underline text-blue-600 hover:text-blue-800">Master's Degree</a>
                <a href="{{ route('dc_rupp') }}" class="underline text-blue-600 hover:text-blue-800">Ph.D.'s Degree</a>
            </div>
        </section>
    </div>

    <script src="/Javascript/RUPP.js"></script>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const universityId = 1; // RUPP UniversityID fixed
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