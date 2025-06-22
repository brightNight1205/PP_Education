<section class="bg-white rounded-2xl shadow-3xl p-8 md:p-12 transition-all duration-300">
    <div class="flex flex-col md:flex-row items-start md:items-center gap-10 ">

        {{-- Left: Smaller Profile Picture --}} 
         {{-- <div class="flex-shrink-0 flex flex-col items-center gap-2">
            <img class="h-15 w-15 rounded-full border-4 border-indigo-500 object-cover shadow "
                src="{{ $user->profile_photo_url ?? 'https://ui-avatars.com/api/?name=' . urlencode($user->name) }}"
                alt="{{ $user->name }}">
            <h3 class="text-base font-semibold text-gray-700 mt-2 text-center">{{ $user->name }}</h3>
        </div> --}}

        {{-- Right: Profile Form --}}
        <div class="flex-1 w-full">
            <div class="mb-8">
                <h2 class="text-3xl font-extrabold text-gray-900">Update Profile</h2>
                <p class="text-sm text-gray-500 mt-1">Keep your profile information up-to-date.</p>
            </div>

            <form id="send-verification" method="post" action="{{ route('verification.send') }}">
                @csrf
            </form>

            <form method="post" action="{{ route('profile.update') }}" class="space-y-6">
                @csrf
                @method('patch')

                {{-- Name --}}
                <div>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" name="name" type="text"
                        class="mt-2 block w-full rounded-md border border-none border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:outline-none shadow-sm"
                        :value="old('name', $user->name)" required autofocus autocomplete="name" />
                    <x-input-error class="mt-2 text-sm" :messages="$errors->get('name')" />
                </div>

                {{-- Email --}}
                <div>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" name="email" type="email"
                        class="mt-2 block w-full rounded-md border border-none border-gray-300 focus:ring-2 focus:ring-indigo-500 focus:outline-none shadow-sm"
                        :value="old('email', $user->email)" required autocomplete="username" />
                    <x-input-error class="mt-2 text-sm" :messages="$errors->get('email')" />

                    {{-- Email Verification Message --}}
                    @if ($user instanceof \Illuminate\Contracts\Auth\MustVerifyEmail && ! $user->hasVerifiedEmail())
                        <div class="mt-3 text-sm text-yellow-600 bg-yellow-50 p-3 rounded-md border border-yellow-300">
                            {{ __('Your email address is unverified.') }}
                            <button form="send-verification" class="ml-1 underline text-indigo-600 hover:text-indigo-800 font-medium">
                                {{ __('Click here to re-send the verification email.') }}
                            </button>

                            @if (session('status') === 'verification-link-sent')
                                <p class="mt-2 text-green-600 font-semibold">
                                    {{ __('A new verification link has been sent.') }}
                                </p>
                            @endif
                        </div>
                    @endif
                </div>

                {{-- Save Button --}}
                <div class="flex items-center gap-4">
                    <button type="submit"
                        class="bg-indigo-600 hover:bg-indigo-700 text-white px-6 py-2 rounded-2xl font-semibold text-sm shadow transition-all ">
                        {{ __('Save Changes') }}
                    </button>

                    @if (session('status') === 'profile-updated')
                        <p x-data="{ show: true }" x-show="show" x-transition
                            x-init="setTimeout(() => show = false, 2500)"
                            class="text-sm text-green-600 font-medium">
                            {{ __('Saved.') }}
                        </p>
                    @endif
                </div>
            </form>
        </div>
    </div>
</section>
