<x-guest-layout>
    <div class="flex  bg-white shadow-lg rounded-lg overflow-hidden w-full max-w-4xl">

       
        <!-- Left Welcome Panel -->
        <div class="w-1/2  bg-indigo-600 text-white p-10 flex flex-col justify-center items-center" style="border-top-left-radius: 7rem; border-bottom-right-radius: 7rem;">
           
            {{-- <img src="{{ asset('images/edu_logo.jpg') }}" alt="App Logo" class="h-20 w-auto" style="margin-bottom: 50px; width:90px; height: 90px;"> --}}

            <h2 class="text-3xl font-bold mb-2">Welcome Back!</h2>
            <p class="mb-6 text-center">Enter your personal details to use all of site features</p>
            <a href="{{ route('login') }}" class="border border-white px-6 py-2  rounded-3xl hover:bg-white hover:text-indigo-600 transition">Sign In</a>
        </div>
        

        <!-- Right Register Form -->
        <div class="w-1/2 p-8">
            <h2 class="text-2xl font-semibold mb-4 text-gray-800 " >Create Account</h2>

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div class="mb-4 " >
                    <x-input-label for="name" :value="__('UserName*')" class="text-grey-200"/>
                    <x-text-input id="name"  class="block w-full mt-1 px-4 py-2 rounded-2xl border border-gray-300 bg-white shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300 focus:outline-none transition duration-200" type="text" name="name" :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-1" />
                </div>

                <!-- Email -->
                <div class="mb-4">
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email"  class="block w-full mt-1 px-4 py-2 rounded-2xl border border-gray-300 bg-white shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300 focus:outline-none transition duration-200" type="email" name="email" :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-1" />
                </div>

                <!-- Password -->
                <div class="mb-4">
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password"  class="block w-full mt-1 px-4 py-2 rounded-2xl border border-gray-300 bg-white shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300 focus:outline-none transition duration-200" type="password" name="password" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-1" />
                </div>

                <!-- Confirm Password -->
                <div class="mb-6">
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation"  class="block w-full mt-1 px-4 py-2 rounded-2xl border border-gray-300 bg-white shadow-sm focus:border-indigo-500 focus:ring-2 focus:ring-indigo-300 focus:outline-none transition duration-200" type="password" name="password_confirmation" required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-1" />
                </div>

                <!-- Submit -->
                <div class="flex justify-end">
                    <x-primary-button class="bg-indigo-600 border border-white px-6 py-2  rounded-3xl hover:bg-indigo-700" style="padding:10px ; align-items: center;">
                        {{ __('Sign Up') }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-guest-layout>
