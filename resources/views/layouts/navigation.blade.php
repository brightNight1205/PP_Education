<!-- Import Alpine.js and custom CSS -->
<script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
<link rel="stylesheet" href="{{ asset('CSS/Homepage.css') }}">

<!-- Navbar -->
<nav class="bg-white p-4 shadow-md fixed w-full z-20 top-0 start-0 border-b border-gray-200">
    <div class="container mx-auto flex flex-wrap items-center justify-between" x-data="{ open: false }">
        <!-- Logo -->
        <a href="{{ route('home') }}" class="flex items-center space-x-3 rtl:space-x-reverse">
            <img src="../Images/Logo.png" class="h-10 rounded-full" alt="EduGuide Logo" />
            <span class="self-center text-2xl font-semibold whitespace-nowrap text-gray-800">EduGuide</span>
        </a>

        <!-- Mobile Menu Button -->
        <button
            @click="open = !open"
            type="button"
            class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200"
            aria-controls="navbar-sticky"
            aria-expanded="false"
        >
            <span class="sr-only">Open main menu</span>
            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h15M1 7h15M1 13h15"/>
            </svg>
        </button>

        <!-- Navbar Links and Buttons -->
        <div
            id="navbar-sticky"
            class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1"
            :class="{ 'show': open, 'hidden': !open, 'flex': open }"
        >
            <ul class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white">
                <li>
                    <a href="{{ route('home') }}" class="block py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0" aria-current="page">Home</a>
                </li>
                <li class="dropdown">
                    <a href="#" class="uni flex items-center py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                        Universities
                        <svg class="ml-1 h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-content">
                        <a href="{{ route('rupp') }}">Royal University of Phnom Penh</a>
                        <a href="{{ route('itc') }}">Institute of Technology of Cambodia</a>
                        <a href="{{ route('cadt') }}">Cambodia Academy of Digital Technology</a>
                        <a href="{{ route('rule') }}">Royal University of Law and Economic</a>
                        <a href="{{ route('aeu') }}">Asia Euro University</a>
                    </div>
                </li>
                <li class="dropdown">
                    <a href="#" class="mas flex items-center py-2 px-3 text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0">
                        Graduate Programs
                        <svg class="ml-1 h-4 w-4 text-gray-500" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                        </svg>
                    </a>
                    <div class="dropdown-content graduate-dropdown">
                        <a href="{{ route('master') }}">Master's Programs</a>
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

            <!-- Conditional Auth Buttons -->
            @guest
            <div id="auth-buttons" class="flex flex-col md:flex-row items-center space-y-2 md:space-y-0 md:space-x-4 ml-4 md:ml-8 mt-4 md:mt-0">
                <a href="{{ route('login') }}" class="btn-outline-primary block text-center w-full md:w-auto">Login</a>
                <a href="{{ route('register') }}" class="btn-solid-primary block text-center w-full md:w-auto">Register</a>
            </div>
            @endguest

            @auth
            <div class="relative ml-4 md:ml-8 mt-4 md:mt-0" x-data="{ open: false }">
                <button
                    @click="open = !open"
                    class="flex items-center gap-2 px-4 py-2 rounded-full border border-gray-300 text-sm font-medium text-gray-700 bg-white hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-blue-500 transition">
                    <!-- Profile Icon -->
                    <svg class="h-5 w-5 text-gray-500" fill="currentColor" viewBox="0 0 20 20">
                        <path fill-rule="evenodd" d="M10 2a4 4 0 100 8 4 4 0 000-8zm-6 14a6 6 0 1112 0H4z" clip-rule="evenodd" />
                    </svg>
                    <span class="font-semibold">{{ Auth::user()->name }}</span>
                    <svg class="h-4 w-4 text-gray-400" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7" />
                    </svg>
                </button>
                <div
                    x-show="open"
                    @click.away="open = false"
                    class="absolute right-0 mt-2 w-48 bg-white rounded-xl shadow-lg ring-1 ring-black ring-opacity-5 focus:outline-none z-50"
                    style="display: none;"
                >
                    <a href="{{ route('profile.edit') }}"
                    class="group flex items-center w-full px-4 py-2 text-sm text-gray-700 hover:bg-indigo-50 hover:text-indigo-700 rounded-lg transition ease-in-out duration-150"
                    >
                        <svg class="mr-3 h-5 w-5 text-gray-400 group-hover:text-indigo-500" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"></path></svg>
                        {{ __('Profile') }}
                    </a>
                    <div class="border-t border-gray-200 my-1"></div>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button
                            type="submit"
                            class="group flex items-center w-full px-4 py-2 text-sm text-red-600 hover:bg-red-50 hover:text-red-700 rounded-lg transition ease-in-out duration-150 font-medium"
                        >
                            <svg class="mr-3 h-5 w-5 text-red-400 group-hover:text-red-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path></svg>
                            {{ __('Log Out') }}
                        </button>
                    </form>
                </div>
            </div>
            @endauth
        </div>
    </div>
</nav>
