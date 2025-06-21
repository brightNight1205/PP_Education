{{-- resources/views/profile/partials/delete-user-form.blade.php --}}

{{-- This section provides the functionality for deleting the user's account.
     It includes a warning, a button to trigger a confirmation modal, and the modal itself. --}}

<section class="space-y-6">
    <header class="mb-8">
        <h2 class="text-2xl font-extrabold text-gray-900 dark:text-gray-100">Delete Account</h2>
        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
            Once your account is deleted, all of its resources and data will be permanently erased. Please be absolutely sure before proceeding.
        </p>
    </header>

    {{-- Button to open the confirmation modal for account deletion --}}
    <x-danger-button x-data="" x-on:click.prevent="$dispatch('open-modal', 'confirm-user-deletion')"
        class="px-6 py-2 rounded-md font-semibold text-sm transition ease-in-out duration-150 shadow-md">
        {{ __('Delete Account') }}
    </x-danger-button>

    {{-- Confirmation Modal for Account Deletion --}}
    <x-modal name="confirm-user-deletion" :show="$errors->userDeletion->isNotEmpty()" focusable>
        <form method="post" action="{{ route('profile.destroy') }}" class="p-6 space-y-6 bg-white dark:bg-gray-900 rounded-lg shadow-xl">
            @csrf
            @method('delete') {{-- Uses DELETE method for deletion --}}

            <h3 class="text-xl font-bold text-gray-900 dark:text-gray-100">Are you absolutely sure you want to delete your account?</h3>
            <p class="text-sm text-gray-600 dark:text-gray-400">
                This action is irreversible. All your data will be permanently removed. Please enter your password to confirm you wish to permanently delete your account.
            </p>

            {{-- Password Input for Confirmation --}}
            <div>
                <x-input-label for="password" value="{{ __('Password') }}" class="sr-only" />
                <x-text-input id="password" name="password" type="password" class="mt-1 block w-full rounded-md border-gray-300 dark:border-gray-700 dark:bg-gray-800 text-gray-900 dark:text-gray-100 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 sm:text-sm"
                    placeholder="Enter your password to confirm" />
                <x-input-error :messages="$errors->userDeletion->get('password')" class="mt-2" />
            </div>

            {{-- Action Buttons in Modal: Cancel and Confirm Delete --}}
            <div class="flex justify-end gap-3 mt-6">
                <x-secondary-button x-on:click="$dispatch('close')"
                    class="px-4 py-2 rounded-md font-semibold text-sm transition ease-in-out duration-150">Cancel</x-secondary-button>
                <x-danger-button
                    class="px-4 py-2 rounded-md font-semibold text-sm transition ease-in-out duration-150 shadow-md">
                    {{ __('Confirm Delete Account') }}
                </x-danger-button>
            </div>
        </form>
    </x-modal>
</section>
