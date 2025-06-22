{{-- resources/views/profile/edit.blade.php --}}

<x-app-layout>
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            font-family: 'Inter', sans-serif;
            background-color: #f8fafc;
        }

        .btn-gradient {
            background-image: linear-gradient(to right, #6366f1, #a855f7);
            color: white;
            transition: all 0.2s ease-in-out;
        }

        .btn-gradient:hover {
            background-image: linear-gradient(to right, #4f46e5, #9333ea);
            box-shadow: 0 4px 10px rgba(99, 102, 241, 0.4);
        }

        input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 1px #6366f1;
        }

        .tab-active {
            @apply border-b-2 border-indigo-500 text-indigo-600 font-semibold;
        }

        .tab-inactive {
            @apply text-gray-500 hover:text-indigo-500 transition;
        }
    </style>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('My Account') }}
        </h2>
    </x-slot>

    <div class="py-8 sm:py-12 bg-gray-100 min-h-screen">
        <div class="max-w-6xl mx-auto bg-white rounded-xl shadow-md overflow-hidden">
            <div class="md:flex">
                {{-- Left Side: Profile Image & Name --}}
                <div class="w-full md:w-1/3 bg-indigo-50 p-6 flex flex-col items-center justify-center">
                    <img class="h-32 w-32 rounded-full border-4 border-indigo-500 object-cover mb-4 shadow"
                        src="{{ $user->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($user->name) }}"
                        alt="{{ $user->name }}">
                    <h2 class="text-xl font-bold text-gray-800">{{ $user->name }}</h2>
                    <p class="text-sm text-gray-600">Member since {{ $user->created_at->format('M Y') }}</p>
                </div>

                {{-- Right Side: Tabs and Forms --}}
                <div class="w-full md:w-2/3 p-8" x-data="{ activeTab: 'profile' }">

                    {{-- Tabs --}}
                    <div class="flex space-x-6 border-b mb-6">
                        <button @click="activeTab = 'profile'"
                            :class="activeTab === 'profile' ? 'tab-active' : 'tab-inactive'"
                            class="pb-2 text-sm">Profile</button>

                        <button @click="activeTab = 'password'"
                            :class="activeTab === 'password' ? 'tab-active' : 'tab-inactive'"
                            class="pb-2 text-sm">Password</button>

                        <button @click="activeTab = 'delete'"
                            :class="activeTab === 'delete' ? 'tab-active' : 'tab-inactive'"
                            class="pb-2 text-sm">Delete</button>
                    </div>

                    {{-- Tab Content --}}
                    <div class="mt-4">
                        <div x-show="activeTab === 'profile'" x-transition>
                            @include('profile.partials.update-profile-information-form')
                        </div>

                        <div x-show="activeTab === 'password'" x-transition>
                            @include('profile.partials.update-password-form')
                        </div>

                        <div x-show="activeTab === 'delete'" x-transition>
                            @include('profile.partials.delete-user-form')
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</x-app-layout>
