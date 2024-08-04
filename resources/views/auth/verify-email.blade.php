<x-guest-layout>
    <a href="/" class="flex items-center justify-center">
        <x-application-logo class="h-20 w-20 fill-current text-gray-500" />
    </a>

    <div class="mb-4 text-sm text-gray-600">
        {{ __('Thanks for signing up! Before getting started, could you verify your email address by clicking on the link we just emailed to you? If you didn\'t receive the email, we will gladly send you another.') }}
    </div>

    @if (session("status") == "verification-link-sent")
        <div class="mb-4 text-sm font-medium text-green-600">
            {{ __("A new verification link has been sent to the email address you provided during registration.") }}
        </div>
    @endif

    <div class="mt-4 flex items-center justify-between">
        <form method="POST" action="{{ route("verification.send") }}">
            @csrf

            <div>
                <x-primary-button class="w-full">
                    {{ __("Resend Verification Email") }}
                </x-primary-button>
            </div>
        </form>

        <form method="POST" action="{{ route("logout") }}">
            @csrf

            <x-primary-button class="w-full">
                {{ __("Log Out") }}
            </x-primary-button>
        </form>
    </div>
</x-guest-layout>
