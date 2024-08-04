<x-guest-layout>
    <a href="/" class="flex items-center justify-center">
        <x-application-logo class="h-20 w-20 fill-current text-gray-500" />
    </a>

    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form method="POST" action="{{ route("login") }}" class="mt-4">
        @csrf

        <!-- Email Address -->
        <div>
            <x-input-label for="email" :value="__('Email')" />
            <x-text-input
                type="email"
                name="email"
                id="email"
                value="{{ old('email') }}"
                required
                autofocus
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

        <div class="mt-4 flex justify-between">
            <!-- Remember Me -->
            <div>
                <label class="inline-flex items-center">
                    <input
                        type="checkbox"
                        class="form-checkbox text-indigo-600"
                        name="remember"
                    />
                    <span class="mx-2 text-sm text-gray-600">
                        {{ __("Remember me") }}
                    </span>
                </label>
            </div>

            <div>
                @if (Route::has("password.request"))
                    <a
                        class="fontme block text-sm text-indigo-700 hover:underline"
                        href="{{ route("password.request") }}"
                    >
                        {{ __("Forgot your password?") }}
                    </a>
                @endif
            </div>
        </div>

        <div class="mt-6">
            <x-primary-button class="w-full">
                {{ __("Log in") }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
