<x-guest-layout>
    <a href="/" class="mb-4 flex items-center justify-center">
        <x-application-logo class="h-10 w-10 fill-current text-gray-500" />
    </a>

    <div class="mb-4 text-sm text-gray-600">
        {{ __("This is a secure area of the application. Please confirm your password before continuing.") }}
    </div>

    <form method="POST" action="{{ route("password.confirm") }}">
        @csrf

        <!-- Password -->
        <x-input-label for="password" :value="__('Password')" />
        <x-text-input
            type="password"
            name="password"
            id="password"
            required
            autocomplete="current-password"
        />
        <x-input-error :messages="$errors->get('password')" class="mt-2" />

        <div class="mt-4 flex justify-end">
            <x-primary-button class="w-full">
                {{ __("Confirm") }}
            </x-primary-button>
        </div>
    </form>
</x-guest-layout>
