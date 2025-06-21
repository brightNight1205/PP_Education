<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edu-Guide Cambodia</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/CSS/Homepage.css">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    
</head>
<body>

    <!-- Navbar -->
    <nav class="bg-white p-4 shadow-md fixed w-full z-20 top-0 start-0 border-b border-gray-200">
        <div class="container mx-auto flex flex-wrap items-center justify-between">
            <!-- Logo -->
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="../Images/Logo.png" class="h-10 rounded-full" alt="Zogin Logo" />
                <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-800">EduGuide</span>
            </a>

            <!-- Mobile Menu Button -->
            <button data-collapse-toggle="navbar-sticky" type="button" class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200" aria-controls="navbar-sticky" aria-expanded="false">
                <span class="sr-only">Open main menu</span>
                <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                    <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
                </svg>
            </button>

            <!-- Navbar Links and Buttons -->
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                    <li>
                        <a href="{{ route('home') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0" aria-current="page">Home</a>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="uni block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Universities <i class="fas fa-chevron-down text-xs ml-1"></i></a>
                        <div class="dropdown-content">
                            <a href="{{ route('rupp') }}">Royal University of Phnom Penh</a>
                            <a href="{{ route('itc') }}">Institute of Technology of Cambodia</a>
                            <a href="{{ route('cadt') }}">Cambodia Academy of Digital Technology</a>
                            <a href="{{ route('rule') }}">Royal University of Law and Economic</a>
                            <a  href="{{ route('aeu') }}">Asia Euro University</a>
                        </div>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="mas block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Graduate Programs <i class="fas fa-chevron-down text-xs ml-1"></i></a>
                        <div class="dropdown-content">
                            <a  href="{{ route('master') }}">Master's Programs</a>
                            <a href="{{ route('doctoral') }}">Doctoral Programs (Ph.D.)</a>
                        </div>
                    </li>
                    <li>
                        <a href="{{ route('contact.create') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">Contact</a>
                    </li>
                    <li>
                        <a href="{{ route('aboutus') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">About Us</a>
                    </li>
                </ul>
                <!-- Login/Register Buttons -->
               <!-- Conditional Auth Buttons -->
@guest
    <!-- Show Login/Register if not logged in -->
    <div id="auth-buttons" class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 ml-4 md:ml-8 mt-4 md:mt-0">
        <a href="{{ route('login') }}" class="btn-outline-primary block text-center w-full md:w-auto">Login</a>
        <a href="{{ route('register') }}" class="btn-solid-primary block text-center w-full md:w-auto">Register</a>
    </div>
@endguest

@auth
<div class="relative ml-4 md:ml-8 mt-4 md:mt-0">
    <x-dropdown align="right" width="48">
        <!-- Trigger Button -->
        <x-slot name="trigger">
            <button
                class="flex items-center gap-2 px-4 py-2 rounded-full border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                <!-- Profile Icon -->
                <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                    <path fill-rule="evenodd" d="M10 2a4 4 0 100 8 4 4 0 000-8zm-6 14a6 6 0 1112 0H4z"
                        clip-rule="evenodd" />
                </svg>

                <!-- Username -->
                <span class="font-semibold">{{ Auth::user()->name }}</span>

                <!-- Dropdown Icon -->
                <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                        d="M19 9l-7 7-7-7" />
                </svg>
            </button>
        </x-slot>

        <!-- Dropdown Content -->
 <x-slot name="content" class="rounded-xl shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none">
    <div class="p-1">
        <x-dropdown-link
            :href="route('profile.edit')"
            class="group flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 rounded-lg transition ease-in-out duration-150"
        >
            <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
            {{ __('Profile') }}
        </x-dropdown-link>

        <div class="border-t border-gray-200 my-1"></div>

        <form method="POST" action="{{ route('logout') }}">
            @csrf
            <x-dropdown-link
                :href="route('logout')"
                onclick="event.preventDefault(); this.closest('form').submit();"
                class="group flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 rounded-lg transition ease-in-out duration-150 font-medium"
            >
                <svg class="mr-3 h-5 w-5 text-red-400 group-hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                {{ __('Log Out') }}
            </x-dropdown-link>
        </form>
    </div>
</x-slot>
    </x-dropdown>
</div>
@endauth

    
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section mt-16 md:mt-0">
        <div class="hero-overlay"></div>
        <div class="hero-content flex flex-col items-center">
            <h2 class="text-4xl md:text-6xl lg:text-7xl font-bold mb-8 leading-tight">Welcome <span style="color:#ffd166;">to EduGuide!</span></h2>
            <h1 class="text-xl md:text-3xl font-light mb-4 tracking-wider">Explore knowledge, <br>empower your future, <br>and learn to succeed with us.</h1>
        </div>
    </section>

    <!-- Welcome Section -->
    <section class="welcome-section">
        <div class="section-header">
            <h1><span style="color: #4F46E5;">Welcome <span style="color: #000000;">To Universities</span></span></h1>
        </div>
    </section>

    <!-- Universities Section -->
  <section class="universities py-12 grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6 px-4 max-w-7xl mx-auto">
    @foreach ($universities as $university)
        <div class="university-card bg-white rounded-lg shadow-md overflow-hidden hover:shadow-lg transition-shadow duration-300">
            <img src="{{ $university->Image ?? 'https://placehold.co/300x200?text=' . urlencode($university->Name) }}" alt="{{ $university->Name }}" class="w-full h-40 object-contain p-4">
            <div class="university-card-content p-4">
                <p class="university-name text-lg font-semibold text-gray-800">{{ $university->Name }}</p>
                <p class="university-meta text-gray-600 mt-2"><i class="fas fa-star text-yellow-400 mr-1"></i> Average Rating: {{ number_format($university->average_rating, 1) }}/5</p>
                <p class="university-meta favorite text-gray-600 mt-1"><i class="fas fa-heart text-red-500 mr-1"></i> Favorites: {{ $university->favorite_count }}</p>
                <a href="{{ route($university->UniversityID == 1 ? 'rupp' : ($university->UniversityID == 2 ? 'itc' : ($university->UniversityID == 3 ? 'rule' : ($university->UniversityID == 4 ? 'aeu' : 'cadt')))) }}" class="university-card-button inline-block mt-4 px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700 transition">View Details</a>
            </div>
        </div>
    @endforeach
</section>
    <!-- University Dashboard Section -->
    <section class="dashboard-section">
        <h1>University Dashboard</h1>
        <div class="dashboard-table-container">
            <table class="dashboard-table">
                <thead>
                    <tr>
                        <th>University Name</th>
                        <th>Total Faculties</th>
                        <th>Total Departments</th>
                        <th>Total Graduates</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Royal University of Phnom Penh</td>
                        <td>7</td>
                        <td>36</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Institute Techno of Cambodia</td>
                        <td>5</td>
                        <td>15</td>
                        <td>2</td>
                    </tr>
                    <tr>
                        <td>Royal University of Law and Economics</td>
                        <td>4</td>
                        <td>10</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Cambodia Academy Digital Technology</td>
                        <td>3</td>
                        <td>9</td>
                        <td>1</td>
                    </tr>
                    <tr>
                        <td>Asia Euro University</td>
                        <td>5</td>
                        <td>20</td>
                        <td>2</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </section>

    <!-- Faculties in Universities Section -->
    <div class="faculties-container">

        <!-- Faculty in Royal University of Phnom Penh (RUPP) -->
        <section class="university">
            <h2><a href="../Front-End/Rupp.html" class="university-link">Royal University of Phnom Penh (RUPP) &#8250;</a></h2>
            <div class="card-container">
                <div class="scroll-container">
                    <div class="card">
                        <img src="https://www.uwinnipeg.ca/future-student/images/fs-science-undergrad-16x9.jpg" alt="Faculty of Science">
                        <p>Faculty of Science</p>
                    </div>
                    <div class="card">
                        <img src="https://www.umu.ac.in/wp-content/uploads/2020/06/Faculty-of-Humanities-and-Social-Sciences.jpg" alt="Faculty of Social Sciences and Humanities">
                        <p>Faculty of Social Sciences and Humanities</p>
                    </div>
                    <div class="card">
                        <img src="https://cdn.mos.cms.futurecdn.net/HFUAjfbamNhbM8dsNSQW3D.jpg" alt="Faculty of Engineering">
                        <p>Faculty of Engineering</p>
                    </div>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQnkfQdfiI197y9p-eT3Rjh44deg0xt7MBIyb1tZot8DgY_HhwP" alt="Faculty of Development Studies">
                        <p>Faculty of Development Studies</p>
                    </div>
                    <div class="card">
                        <img src="https://www.euroschoolindia.com/wp-content/uploads/2023/08/role-of-education.jpg" alt="Faculty of Education">
                        <p>Faculty of Education</p>
                    </div>
                    <div class="card">
                        <img src="https://lifehacker.com/imagery/articles/01HF2HB2X7HE86QASK9A0SMWJK/hero-image.fill.size_1248x702.v1699833512.jpg" alt="Institute of Lifelong Languages">
                        <p>Institute of Lifelong Languages</p>
                    </div>
                    <div class="card">
                        <img src="https://rupp.edu.kh/iispp/image_banner/Render%20flag.jpg" alt="Institute of International Studies and Public Policy">
                        <p>Institute of International Studies and Public Policy</p>
                    </div>
                </div>        
            </div>
        </section>

        <!-- Faculty in Institute Technology of Cambodia (ITC) -->
        <section class="university">
            <h2><a href="../Front-End/ITC.html" class="university-link">Institute Technology of Cambodia (ITC) &#8250;</a></h2>
            <div class="card-container">
                <div class="scroll-container">
                    <div class="card">
                        <img src="https://www.austintec.com/wp-content/uploads/2024/05/what-do-electrical-engineers-do.jpg" alt="Faculty of Electrical Engineering">
                        <p>Faculty of Electrical Engineering</p>
                    </div>
                    <div class="card">
                        <img src="https://cesblog.sdsu.edu/wp-content/uploads/sites/8/2023/05/Top-10-Job-Sectors-for-Civil-Engineering-Graduates-Featured-image.png" alt="Faculty of Civil Engineering">
                        <p>Faculty of Civil Engineering</p>
                    </div>
                    <div class="card">
                        <img src="https://img.freepik.com/free-vector/science-poster-sea-breeze_1308-33809.jpg?t=st=1733834123~exp=1733837723~hmac=ac9568c0b95d589159d27871df8cdd0a6fe9b27390e76978d2293ed3b6a0864c&w=826" alt="Faculty of Hydrology and Water Resources Engineering">
                        <p>Faculty of Hydrology and Water Resources Engineering</p>
                    </div>
                    <div class="card">
                        <img src="https://media.licdn.com/dms/image/D4E12AQHGteRiTII-aA/article-cover_image-shrink_720_1280/0/1692330994246?e=2147483647&v=beta&t=9zcNy1CkwjJfOtN16TrrNFS2wzBZMXoYAv6rUbBVxgc" alt="Faculty of Geo-resources and Geotechnical Engineering">
                        <p>Faculty of Geo-resources and Geotechnical Engineering</p>
                    </div>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcS-7hjKIwAdNXyKS2bvzaQUSI-wZx9glbv5dSYdAf9YmrU3fnIyzcmzl3s_3U0-d3YU19g&usqp=CAU" alt="Faculty of Chemical and Food Engineering">
                        <p>Faculty of Chemical and Food Engineering</p>
                    </div>
                </div>        
            </div>
        </section>

        <!-- Faculty in Royal University of Law and Economic (RULE) -->
        <section class="university">
            <h2><a href="../Front-End/Rule.html" class="university-link">Royal University of Law and Economic (RULE) &#8250;</a></h2>
            <div class="card-container">
                <div class="scroll-container">
                    <div class="card">
                        <img src="https://static.wixstatic.com/media/1cd646_ae7f0376474742e4ac9a0dee2f3f5a5d~mv2_d_2508_1672_s_2.jpg/v1/fill/w_568,h_378,al_c,q_80,usm_0.66_1.00_0.01,enc_auto/1cd646_ae7f0376474742e4ac9a0dee2f3f5a5d~mv2_d_2508_1672_s_2.jpg" alt="Faculty of Law">
                        <p>Faculty of Law</p>
                    </div>
                    <div class="card">
                        <img src="https://www.columbiasouthern.edu/media/sotabm2t/current-trends-and-issues-in-public-administration.jpg" alt="Faculty of Public Adminstration">
                        <p>Faculty of Public Adminstration</p>
                    </div>
                    <div class="card">
                        <img src="https://cdn.vysokeskoly.cz/czech-universities/uploads/2023/10/business-people-shaking-hands-together-kopie.jpg" alt="Faculty of Economics and Management">
                        <p>Faculty of Economics and Management</p>
                    </div>
                    <div class="card">
                        <img src="https://rcfsd.github.io/images/research/fig1.jpg" alt="Faculty of Informatics Economic">
                        <p>Faculty of Informatics Economic</p>
                    </div>
                </div>        
            </div>
        </section>

        <!-- Faculty in Cambodia Academy of Digital Technology (CADT) -->
        <section class="university">
            <h2><a href="../Front-End/CADT.html" class="university-link">Cambodia Academy of Digital Technology (CADT) &#8250;</a></h2>
            <div class="card-container">
                <div class="scroll-container">
                    <div class="card">
                        <img src="https://ecspm.org/wp-content/uploads/2020/11/ecspm-img-digital-technology.jpg" alt="Institute of Digital Technology (IDT)">
                        <p>Institute of Digital Technology (IDT)</p>
                    </div>
                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSfn6eNnu2ESxjZ4pTh70Qpe9zWpK8uQ4AR4sOv51Oyv4fe8yWmRyTw0-DpwCQQwsbRAdw&usqp=CAU" alt="Institute of Digital Governance (IDG)">
                        <p>Institute of Digital Governance (IDG)</p>
                    </div>
                    <div class="card">
                        <img src="https://blogs.idc.com/wp-content/uploads/2020/01/01.17.20_MNR_Featured-scaled.jpg" alt="Institute of Digital Research and Innovation (IDRI)">
                        <p>Institute of Digital Research and Innovation (IDRI)</p>
                    </div>
                </div>        
            </div>
        </section>

        <!-- Faculty in Asia Euro University (AEU) -->
        <section class="university">
            <h2><a href="../Front-End/AEU.html" class="university-link">Asia Euro University (AEU) &#8250;</a></h2>
            <div class="card-container">
                <div class="scroll-container">
                    <div class="card">
                        <img src="https://www.cest.org.uk/wp-content/uploads/2021/06/cest-future-science-technology.jpg" alt="Faculty of Science and Technology">
                        <p>Faculty of Science and Technology</p>
                    </div>
                    
                    <div class="card">
                        <img src="https://blogs.dpuerp.in/images/blog/60/11017-law-and-political-science.jpg" alt="Faculty of Law and Political Science">
                        <p>Faculty of Law and Political Science</p>
                    </div>

                    <div class="card">
                        <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQJI1F6YB5orTC2Rb9M8uDJ1lL74EJpMQLCFw&s" alt="Faculty of Social Sciences and Economics">
                        <p>Faculty of Social Sciences and Economics</p>
                    </div>

                    <div class="card">
                        <img src="https://bce.iafor.org/wp-content/uploads/sites/52/2020/07/The-Relevance-of-the-Humanities-and-Arts-in-Uncertain-Times-1100x550.jpg" alt="Faculty of Arts, Humanities and Languages">
                        <p>Faculty of Arts, Humanities and Languages</p>
                    </div>

                    <div class="card">
                        <img src="https://www.hostudents.com/pics_fotosestudios/34/big_crop_eu-business-leisure-y-tourism.jpg" alt="Faculty of Business Administration and Tourism">
                        <p>Faculty of Business Administration and Tourism</p>
                    </div>
                </div>        
            </div>
            
        </section>
    </div>

    <!-- Footer -->
    <div class="box">
        <div class="footer">
            <div class="footer-content">
                <div class="footer-section about">
                    <h3>About</h3>
                    <ul>
                        <li><a href="{{ route('aboutus') }}">About Us</a></li>
                        <li><a href="{{ route('contact.create') }}">Contact Us</a></li>
                        <li><a href="{{ route('feedback') }}">Feedback Error</a></li>
                    </ul>
                </div>
                <div class="footer-section reference">
                    <h3>Reference</h3>
                    <ul>
                        <li><a href="#">4ICU</a></li>
                        <li><a href="#">Cambodia Education Info</a></li>
                        <li><a href="#">EduRank</a></li>
                        <li><a href="#">Times Higher Education</a></li>
                    </ul>
                </div>
                <div class="footer-section logo">
                    <img src="../Images/Logo.png" alt="EduGuide Logo">
                    <h3>EduGuide</h3>
                    <p>in CAMBODIA</p>
                </div>
            </div>
            <hr>
            <div class="footer-bottom">
                <p>Copyright © 2024 Edu-Guide. All rights reserved.</p>
            </div>
        </div>
    </div>
    
    <script src="https://cdnjs.cloudflare.com/ajax/libs/flowbite/2.3.0/flowbite.min.js"></script>
   <script src="/Javascript/HomePage.js"></script>

</body>
</html>