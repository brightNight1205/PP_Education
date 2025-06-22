<x-guest-layout>
  <div class="flex flex-col md:flex-row bg-white shadow-xl rounded-3xl overflow-hidden w-full max-w-5xl mx-auto">

    <!-- Left Panel - Welcome -->
    <div class="md:w-1/2 bg-gradient-to-tr from-indigo-700 to-indigo-500 text-white flex flex-col justify-center items-center p-12 rounded-tr-3xl rounded-br-3xl"
         style="border-top-left-radius: 7rem; border-bottom-right-radius: 7rem;">
      <h2 class="text-4xl font-extrabold mb-4 tracking-tight">Welcome Back!</h2>
      <p class="mb-8 text-center max-w-xs">Stay connected with us by logging in to your account.</p>
      <a href="{{ route('register') }}"
         class="px-8 py-3 border border-white rounded-full text-white text-lg font-semibold hover:bg-white hover:text-indigo-700 transition duration-300">
        Sign Up
      </a>
    </div>

    <!-- Right Panel - Login Form -->
    <div class="md:w-1/2 p-10 md:p-16 flex flex-col justify-center">
      <h2 class="text-3xl font-semibold mb-8 text-gray-800">Log in to your account</h2>

      <!-- Session Status -->
      <x-auth-session-status class="mb-6" :status="session('status')" />

      <!-- Login Form -->
      <form method="POST" action="{{ route('login') }}" class="space-y-6">
        @csrf

        <!-- Email -->
        <div>
          <x-input-label for="email" :value="__('Email')" />
          <x-text-input id="email" name="email" type="email" :value="old('email')" required autofocus autocomplete="username"
                        class="mt-1 block w-full rounded-xl border border-gray-300 px-4 py-3 shadow-sm
                               focus:border-indigo-600 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition" />
          <x-input-error :messages="$errors->get('email')" class="mt-1" />
        </div>

        <!-- Password -->
        <div>
          <x-input-label for="password" :value="__('Password')" />
          <x-text-input id="password" name="password" type="password" required autocomplete="current-password"
                        class="mt-1 block w-full rounded-xl border border-gray-300 px-4 py-3 shadow-sm
                               focus:border-indigo-600 focus:ring-2 focus:ring-indigo-400 focus:outline-none transition" />
          <x-input-error :messages="$errors->get('password')" class="mt-1" />
        </div>

        <!-- Remember & Forgot -->
        <div class="flex items-center justify-between">
          <label class="inline-flex items-center space-x-2">
            <input type="checkbox" name="remember" class="rounded border-gray-300 text-indigo-600 focus:ring-indigo-500" />
            <span class="text-sm text-gray-600">Remember me</span>
          </label>
          @if (Route::has('password.request'))
            <a href="{{ route('password.request') }}" class="text-sm font-medium text-indigo-600 hover:underline">
              Forgot password?
            </a>
          @endif
        </div>

        <!-- Submit Button -->
        <div>
          <x-primary-button
            class="bg-indigo-600 border border-white px-9 py-3  rounded-3xl hover:bg-white hover:text-indigo-600 transition">
            {{ __('Log in') }}
          </x-primary-button>
        </div>
      </form>
    </div>
  </div>
</x-guest-layout>
