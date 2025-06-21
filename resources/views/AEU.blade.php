<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asia Euro University</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
     <link rel="stylesheet" href="/CSS/AEU.css">
       <meta name="csrf-token" content="{{ csrf_token() }}">

</head>
<body class="flex flex-col">
    <div class="main-container">
        <!-- University Header -->
        <header class="university-header">
            <img src="https://i.pinimg.com/736x/b0/fb/f2/b0fbf2f5c0ef493352672727cf45ffb3.jpg" alt="Asia Euro University Logo" class="logo" onerror="this.onerror=null;this.src='https://placehold.co/100x100/6366F1/FFFFFF?text=AEU';"/>
            <h1>Asia Euro University (AEU)</h1>
        </header>

        <!-- Main Content (Images and Description) -->
        <section class="image-gallery">
            <div class="image-item-lg">
                <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQbca8lgOGDoiE5EwOlkzkMwR45pWU7esEXyQ&s" alt="University Building 1" onerror="this.onerror=null;this.src='https://placehold.co/400x300/e0f2fe/1e3a8a?text=AEU+Building+1';"/>
            </div>
            <div class="image-item-lg">
                <img src="https://www.acledabank.com.kh/kh/assets/bill-logo/school-aeu.jpg" alt="University Campus" onerror="this.onerror=null;this.src='https://placehold.co/800x400/e0f2fe/1e3a8a?text=AEU+Campus';"/>
                <div class="image-description">
                    <p>
                        <span class="highlight">Asia Euro University (AEU)</span> is a private higher education institution located in Phnom Penh, Cambodia. Established in 2005, AEU aims to provide quality education to students in various fields, including business, law, economics, science, and technology.
                    </p>
                </div>
            </div>
        </section>
        <p class="additional-info-text">
            Asia Euro University (AEU) is a private higher education institution located in Phnom Penh, Cambodia. Established in 2005, AEU aims to provide quality education to students in various fields, including business, law, economics, science, and technology.
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
                    <strong>Found:</strong> <span>2005</span>
                </div>
                <div class="overview-item">
                    <strong>Acronym:</strong> <span>AEU</span>
                </div>
                <div class="overview-item">
                    <strong>Official Name:</strong>
                    <span class="ml-2">សាកលវិទ្យាល័យ អាស៊ីអឺរ៉ុប</span>
                </div>
                <div class="overview-item">
                    <strong>Latin Name:</strong>
                    <span class="ml-2">Asia Euro University</span>
                </div>
                <div class="overview-item">
                    <strong>Webpage:</strong>
                    <a href="https://www.aeu.edu.kh/" target="_blank" rel="noopener noreferrer" class="ml-2">https://www.aeu.edu.kh/</a>
                </div>
            </div>

            <!-- Contact Info Card -->
            <div class="overview-card contact-info-section">
                <h3>Contact Information</h3>
                <div class="contact-detail">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Address:</strong><br>
                        826 Kampuchea Krom Blvd, Teuk Laak I, Khan Toul Kork<br>
                        Phnom Penh, Cambodia
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-globe"></i>
                    <div>
                        <strong>Map:</strong><br>
                        <a href="https://www.google.com/maps/place/Asia+Euro+University+(AEU)+Gold+Building/@11.5658662,104.8935418,17.93z/data=!4m6!3m5!1s0x3109510b13bc2357:0x597605a20d478cea!8m2!3d11.564774!4d104.8961174!16s%2Fg%2F11by_zbpqw?entry=ttu&g_ep=EgoyMDI1MDYxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">View on map</a>
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <strong>Phone:</strong><br>
                        089 292 168 / 098 292 168 / 090 292 168
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Email:</strong><br>
                        <a href="mailto:info@aeu.edu.kh">info@aeu.edu.kh</a>
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fab fa-facebook-f"></i>
                    <div>
                        <strong>Facebook:</strong><br>
                        <a href="https://www.facebook.com/aeu.edu.kh" target="_blank" rel="noopener noreferrer">facebook.com/AEUCambodia</a>
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fab fa-telegram-plane"></i>
                    <div>
                        <strong>Telegram:</strong><br>
                        <a href="https://t.me/aeu_official" target="_blank" rel="noopener noreferrer">t.me/aeu_official</a>
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
                <!-- Faculty of Science and Technology -->
                <div class="faculty-card">
                    <h3>Faculty of Science and Technology</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Department of Computer Network Technology</li>
                        <li><span class="checkmark">&#10003;</span> Department of Electronic and Electricity Engineering</li>
                        <li><span class="checkmark">&#10003;</span> Department of Information Technology</li>
                    </ul>
                </div>
                <!-- Faculty of Law -->
                <div class="faculty-card">
                    <h3>Faculty of Law</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Department of Public Law</li>
                        <li><span class="checkmark">&#10003;</span> Department of Public Administration</li>
                        <li><span class="checkmark">&#10003;</span> Department of Law</li>
                    </ul>
                </div>
                <!-- Faculty of Social Sciences and Economics -->
                <div class="faculty-card">
                    <h3>Faculty of Social Sciences and Economics</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Department of Community Development</li>
                        <li><span class="checkmark">&#10003;</span> Department of Finance and Banking</li>
                        <li><span class="checkmark">&#10003;</span> Department of Economics</li>
                        <li><span class="checkmark">&#10003;</span> Department of International Business</li>
                    </ul>
                </div>
                <!-- Faculty of Arts, Humanities and Languages -->
                <div class="faculty-card">
                    <h3>Faculty of Arts, Humanities and Languages</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Department of English</li>
                        <li><span class="checkmark">&#10003;</span> Department of Chinese Literature</li>
                        <li><span class="checkmark">&#10003;</span> Department of International Relations</li>
                    </ul>
                </div>
                <!-- Faculty of Business Administration and Tourism -->
                <div class="faculty-card">
                    <h3>Faculty of Business Administration and Tourism</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Department of Management</li>
                        <li><span class="checkmark">&#10003;</span> Department of Marketing</li>
                        <li><span class="checkmark">&#10003;</span> Department of Accounting</li>
                        <li><span class="checkmark">&#10003;</span> Department of Human Resource Management</li>
                        <li><span class="checkmark">&#10003;</span> Department of Hotel and Tourism Management</li>
                        <li><span class="checkmark">&#10003;</span> Department of Information Management Systems</li>
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
                <a href="{{ route('m_aeu') }}" >Master's Degree</a>
                <a href="{{ route('dc_aeu') }}">Ph.D.'s Degree</a>
            </div>
        </section>
    </div>

    <script src="/Javascript/AEU.js"></script>
     <script>
        document.addEventListener('DOMContentLoaded', function () {
            const universityId = 4; // AEU UniversityID fixed
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