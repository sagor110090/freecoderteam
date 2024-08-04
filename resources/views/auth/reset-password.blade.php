<x-guest-layout>
    <a href="/" class="flex items-center justify-center">
        <x-application-logo class="h-20 w-20 fill-current text-gray-500" />
    </a>

    <form method="POST" action="{{ route("password.update") }}">
        @csrf

        <!-- Password Reset Token -->
        <input
            type="hidden"
            name="token"
            value="{{ $request->route("token") }}"
        />

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                type="email"
                name="email"
                id="email"
                value="{{ old('email', $request->email) }}"
                required
            />
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <!-- Password -->
        <div class="mt-3">
            <x-input-label for="password" :value="__('Password')" />
            <x-text-input
                type="password"
                name="password"
                id="password"
                required
                autocomplete="current-password"
            />
            <x-input-error :messages="$errors->get('password')" class="mt-2" />
        </div>

        <!-- Confirm Password -->
        <div class="mt-3">
            <x-input-label
                for="password_confirmation"
                :value="__('Confirm Password')"
            />
            <x-text-input
                type="password"
                name="password_confirmation"
                id="password_confirmation"
                required
            />
            <x-input-error
                :messages="$errors->get('password_confirmation')"
                class="mt-2"
            />
        </div>

        <div class="mt-4 flex items-center justify-end">
            <x-primary-button class="w-full">
                {{ __("Reset Password") }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
