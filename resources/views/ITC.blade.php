<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Institute of Technology of Cambodia</title>
    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <!-- Inter Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
   <link rel="stylesheet" href="/CSS/ICT.css">
   <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body class="flex flex-col">
    <div class="main-container">
        <!-- University Header -->
        <header class="university-header">
            <img src="https://upload.wikimedia.org/wikipedia/en/f/f7/Institute_of_Technology_of_Cambodia_logo.png" alt="Institute of Technology of Cambodia Logo" class="logo">
            <h1>Institute of Technology of Cambodia (ITC)</h1>
        </header>

        <!-- Main Content (Images and Description) -->
        <section class="image-gallery">
            <div class="image-item-lg">
                <img src="https://itc.edu.kh/wp-content/uploads/2022/02/photo_2022-02-04_08-54-18-1024x745.jpg" alt="University Building 1" onerror="this.onerror=null;this.src='https://placehold.co/400x300/e0f2fe/1e3a8a?text=ITC+Building+1';"/>
            </div>
            <div class="image-item-lg">
                <img src="https://foodstem-euproject.itc.edu.kh/wp-content/uploads/2021/05/ITC-V2-1024x576.jpg" alt="University Campus" onerror="this.onerror=null;this.src='https://placehold.co/800x400/e0f2fe/1e3a8a?text=ITC+Campus';"/>
                <div class="image-description">
                    <p>
                        <span class="highlight">The Institute of Technology of Cambodia (ITC),</span>also known as Institut de Technologie du Cambodge (ITC), is one of Cambodia's premier institutions for higher education in science, engineering, and technology.
                    </p>
                </div>
            </div>
        </section>
        <p class="additional-info-text">
            Established in 1964 through cooperation between Cambodia and the former Soviet Union, ITC has played a crucial role in the country's development of skilled professionals in various technical fields.
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
                    <strong>Found:</strong> <span>1964</span>
                </div>
                <div class="overview-item">
                    <strong>Acronym:</strong> <span>ITC</span>
                </div>
                <div class="overview-item">
                    <strong>Official Name:</strong>
                    <span class="ml-2">វិទ្យាស្ថានបច្ចេកវិទ្យាកម្ពុជា</span>
                </div>
                <div class="overview-item">
                    <strong>Latin Name:</strong>
                    <span class="ml-2">THE INSTITUTE OF TECHNOLOGY OF CAMBODIA (ITC)</span>
                </div>
                <div class="overview-item">
                    <strong>Webpage:</strong>
                    <a href="https://itc.edu.kh/" target="_blank" rel="noopener noreferrer" class="ml-2">https://itc.edu.kh/</a>
                </div>
            </div>

            <!-- Contact Info Card -->
            <div class="overview-card contact-info-section">
                <h3>Contact Information</h3>
                <div class="contact-detail">
                    <i class="fas fa-map-marker-alt"></i>
                    <div>
                        <strong>Address:</strong><br>
                        Russian Conf Norodom Boulevard, Phnom Penh 120404<br>
                        Phnom Penh, Cambodia
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-globe"></i>
                    <div>
                        <strong>Map:</strong><br>
                        <a href="https://www.google.com/maps/place/Institute+of+Technology+of+Cambodia/@11.5703975,104.8955054,17z/data=!3m1!4b1!4m6!3m5!1s0x3109517388680e15:0x63057e6682968f5!8m2!3d11.5703975!4d104.8980857!16zL2m/MDZ5dmhz?entry=ttu&g_ep=EgoyMDI1MDYxMS4wIKXMDSoASAFQAw%3D%3D" target="_blank" rel="noopener noreferrer">View on map</a>
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-phone-alt"></i>
                    <div>
                        <strong>Phone:</strong><br>
                        +855 23 880 370 / 982 404
                    </div>
                </div>
                <div class="contact-detail">
                    <i class="fas fa-envelope"></i>
                    <div>
                        <strong>Email:</strong><br>
                        <a href="mailto:info@itc.edu.kh">info@itc.edu.kh</a>
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
                <!-- Faculty of Electrical Engineering -->
                <div class="faculty-card">
                    <h3>Faculty of Electrical Engineering</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Department of Electrical and Energy Engineering</li>
                        <li><span class="checkmark">&#10003;</span> Department of Industrial and Energy Engineering</li>
                        <li><span class="checkmark">&#10003;</span> Department of Information and Communications Technology (ICT)</li>
                        <li><span class="checkmark">&#10003;</span> Department of Telecommunications and Network Engineering</li>
                        <li><span class="checkmark">&#10003;</span> Department of E-learning</li>
                        <li><span class="checkmark">&#10003;</span> Department of Applied Mathematics and Statistics</li>
                    </ul>
                </div>
                <!-- Faculty of Civil Engineering -->
                <div class="faculty-card">
                    <h3>Faculty of Civil Engineering</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Department of Civil Engineering</li>
                        <li><span class="checkmark">&#10003;</span> Department of Architecture Engineering</li>
                        <li><span class="checkmark">&#10003;</span> Department of Infrastructure and Transportation</li>
                    </ul>
                </div>
                <!-- Faculty of Hydrology and Water Resources Engineering -->
                <div class="faculty-card">
                    <h3>Faculty of Hydrology and Water Resources Engineering</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Department of Resources and Rural Infrastructure</li>
                        <li><span class="checkmark">&#10003;</span> Department of Water Environmental Engineering</li>
                    </ul>
                </div>
                <!-- Faculty of Geo-resources and Geotechnical Engineering -->
                <div class="faculty-card">
                    <h3>Faculty of Geo-resources and Geotechnical Engineering</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Department of Geotechnical Engineering</li>
                        <li><span class="checkmark">&#10003;</span> Department of Geo-resources and Petroleum</li>
                    </ul>
                </div>
                <!-- Faculty of Chemical and Food Engineering (Original user code had "Faculty of Development Studies" here, adjusted to Chemical and Food based on list) -->
                <div class="faculty-card">
                    <h3>Faculty of Chemical and Food Engineering</h3>
                    <ul>
                        <li><span class="checkmark">&#10003;</span> Department of Chemical Engineering</li>
                        <li><span class="checkmark">&#10003;</span> Department of Food Science and Technology</li>
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
                <a href="{{ route('m_itc') }}">Master's Degree</a>
                <a href="{{ route('dc_itc') }}">Ph.D.'s Degree</a>
            </div>
        </section>
    </div>

   <script src="/Javascript/ICT.js"></script>


    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const universityId = 2; // ITC UniversityID fixed
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