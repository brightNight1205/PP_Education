<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cambodia Academy of Digital Technology</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link rel="stylesheet" href="/CSS/CADT.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="flex flex-col">
    <div class="main-container">
        <!-- University Header -->
        <header class="university-header">
            <img src="https://media.startupcambodia.gov.kh/platform/core/stakeholder/logos/967f53b3-7da8-4bf0-80fb-6a5dfc1f78f2.jpg" alt="Cambodia Academy of Digital Technology Logo" class="logo" onerror="this.onerror=null;this.src='https://placehold.co/100x100/6366F1/FFFFFF?text=CADT';"/>
            <h1>Cambodia Academy of Digital Technology (CADT)</h1>
        </header>

        <!-- Main Content (Images and Description) -->
        <section class="image-gallery">
            <div class="image-item-lg">
                <img src="https://i.ytimg.com/vi/zfMH_JTMVMs/hq720.jpg?sqp=-oaymwEhCK4FEIIDSFryq4qpAxMIARUAAAAAGAElAADIQj0AgKJD&rs=AOn4CLDTKjVLDUbOvZ_iGnT-BlJaM31fXw" alt="University Building 1" onerror="this.onerror=null;this.src='https://placehold.co/400x300/e0f2fe/1e3a8a?text=CADT+Building+1';"/>
            </div>
            <div class="image-item-lg">
                <img src="https://cadt.edu.kh/wp-content/uploads/2024/06/Our-10th-Anniversary-Celebration-scaled.webp" alt="University Campus" onerror="this.onerror=null;this.src='https://placehold.co/800x400/e0f2fe/1e3a8a?text=CADT+Campus';"/>
                <div class="image-description">
                    <p>
                        <span class="highlight">The Cambodia Academy of Digital Technology (CADT)</span> is a prominent educational institution focused on advancing digital technology and innovation in Cambodia. 
                    </p>
                </div>
            </div>
        </section>
        <p class="additional-info-text">
            CADT, formerly known as NIPTICT, was rebranded in November 2021. Its mission is to provide high-quality education and training in digital technology while promoting research and innovation to support the development of Cambodia's digital economy and society.
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
                    <strong>Found:</strong> <span>2003</span>
                </div>
                <div class="overview-item">
                    <strong>Acronym:</strong> <span>CADT</span>
                </div>
                <div class="overview-item">
                    <strong>Official Name:</strong>
                    <span class="ml-2">បណ្ឌិត្យសភាបច្ចេកវិទ្យា​ឌីជីថលកម្ពុជា</span>
                </div>
                <div class="overview-item">
                    <strong>Latin Name: </strong>
                    <span class="ml-2">THE CAMBODIA ACADEMY OF DIGITAL TECHNOLOGY (CADT)</span>
                </div>
                <div class="overview-item">
                    <strong>Webpage:</strong>
                    <a href="https://cadt.edu.kh/" target="_blank" rel="noopener noreferrer" class="ml-2">https://cadt.edu.kh/</a>
                </div>
            </div>

            <!-- Contact Info Card -->
            <div class="overview-card contact-info-section">
                <h3>Contact Information</h3>
                <div class="contact-detail">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Address:</strong><br>
                        Bridge 2, National Road 6A, Sangkat Prek Leap, Khan Chroy Changva<br>
                        Phnom Penh, Cambodia
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-globe"></i>
                    <div>
                        <strong>Map:</strong><br>
                        <a href="https://www.google.com/maps/place/Cambodia+Academy+of+Digital+Technology+(CADT)/@11.6530599,104.9091141,17z/data=!3m1!4b1!4m6!3m5!1s0x3109516bdea989b3:0x372d2c5e0e14b706!8m2!3d11.6530599!4d104.9116944!16s%2Fg%2F11byygmxw3?entry=ttu&g_ep=EgoyMDI1MDYxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">View on map</a>
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <strong>Phone:</strong><br>
                        015 335 877
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Email:</strong><br>
                        <a href="mailto:pr@cadt.edu.kh">pr@cadt.edu.kh</a>
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
                <!-- Institute of Digital Technology (IDT) -->
                <div class="faculty-card">
                    <h3>Institute of Digital Technology (IDT)</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Computer Science</li>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Data Science</li>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Digital Media</li>
                        <li><span class="checkmark">&#10003;</span> Bachelor of Cybersecurity</li>
                    </ul>
                </div>
                <!-- Institute of Digital Governance (IDG) -->
                <div class="faculty-card">
                    <h3>Institute of Digital Governance (IDG)</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Digital Governance Training</li>
                        <li><span class="checkmark">&#10003;</span> Technology Transformation for Government Agencies</li>
                    </ul>
                </div>
                <!-- Institute of Digital Research and Innovation (IDRI) -->
                <div class="faculty-card">
                    <h3>Institute of Digital Research and Innovation (IDRI)</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Artificial Intelligence</li>
                        <li><span class="checkmark">&#10003;</span> Internet of Things (IoT)</li>
                        <li><span class="checkmark">&#10003;</span> Digital Policy Research</li>
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
                <a href="{{ route('m_cadt') }}">Master's Degree</a>
                <a href="#">Ph.D.'s Degree</a>
            </div>
        </section>
    </div>

    <script src="/Javascript/CADT.js"></script>
     <script>
        document.addEventListener('DOMContentLoaded', function () {
            const universityId = 5; // CADT UniversityID fixed
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