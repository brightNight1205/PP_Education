{{-- resources/views/profile/partials/update-password-form.blade.php --}}

{{-- This section allows the user to update their account password.
     It includes fields for current password, new password, and confirmation. --}}

<section>
    <header class="mb-8">
        <h2 class="text-2xl font-extrabold text-gray-900 dark:text-gray-100">Update Password</h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Ensure your account is using a long, random password to stay secure.
        </p>
    </header>

    {{-- Form for updating password --}}
    <form method="post" action="{{ route('password.update') }}" class="mt-6 space-y-6">
        @csrf
        @method('put') {{-- Uses PUT method for updates --}}

        {{-- Current Password Input --}}
        <div>
            <x-input-label for="current_password" :value="__('Current Password')" class="block text-sm font-medium text-gray-700 dark:text-gray-300"/>
            <x-text-input id="current_password" name="current_password" type="password" class="mt-2 block w-full rounded-2xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                autocomplete="current-password" />
            <x-input-error :messages="$errors->updatePassword->get('current_password')" class="mt-2" />
        </div>

        {{-- New Password Input --}}
        <div>
            <x-input-label for="password" :value="__('New Password')" class="block text-sm font-medium text-gray-700 dark:text-gray-300"/>
            <x-text-input id="password" name="password" type="password" class="mt-2 block w-full rounded-2xl border-gray-300 dark:border-gray-700 dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password')" class="mt-2" />
        </div>

        {{-- Confirm New Password Input --}}
        <div>
            <x-input-label for="password_confirmation" :value="__('Confirm Password')" class="block text-sm font-medium text-gray-700 dark:text-gray-300"/>
            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-2 block w-full  border-gray-300 dark:border-gray-700 dark:bg-gray-900 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm rounded-2xl"
                autocomplete="new-password" />
            <x-input-error :messages="$errors->updatePassword->get('password_confirmation')" class="mt-2" />
        </div>

        {{-- Save Password Button and Status Message --}}
        <div class="flex items-center gap-4 mt-6">
            <x-primary-button class="  bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-2xl font-semibold text-sm transition ease-in-out duration-150 shadow-md">
                {{ __('Save Password') }}
            </x-primary-button>

            {{-- Displays a "Password updated successfully." message temporarily --}}
            @if (session('status') === 'password-updated')
                <p x-data="{ show: true }" x-show="show" x-transition x-init="setTimeout(() => show = false, 2500)"
                   class="text-sm text-gray-600 dark:text-gray-400">Password updated successfully.</p>
            @endif
        </div>
    </form>
</section>
