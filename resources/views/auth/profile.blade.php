<x-app-layout>
    <x-slot name="header">
        {{ __("My profile") }}
    </x-slot>

    @if ($message = Session::get("success"))
        <div
            class="mb-4 inline-flex w-full overflow-hidden rounded-lg bg-white shadow-md"
        >
            <div class="flex w-12 items-center justify-center bg-green-500">
                <svg
                    class="h-6 w-6 fill-current text-white"
                    viewBox="0 0 40 40"
                    xmlns="http://www.w3.org/2000/svg"
                >
                    <path
                        d="M20 3.33331C10.8 3.33331 3.33337 10.8 3.33337 20C3.33337 29.2 10.8 36.6666 20 36.6666C29.2 36.6666 36.6667 29.2 36.6667 20C36.6667 10.8 29.2 3.33331 20 3.33331ZM16.6667 28.3333L8.33337 20L10.6834 17.65L16.6667 23.6166L29.3167 10.9666L31.6667 13.3333L16.6667 28.3333Z"
                    ></path>
                </svg>
            </div>

            <div class="-mx-3 px-4 py-2">
                <div class="mx-3">
                    <span class="font-semibold text-green-500">Success</span>
                    <p class="text-sm text-gray-600">{{ $message }}</p>
                </div>
            </div>
        </div>
    @endif

    <div class="overflow-hidden bg-white shadow-md sm:rounded-lg">
        <div class="border-b border-gray-200 p-6">
            <form action="{{ route("profile.update") }}" method="POST">
                @csrf
                @method("PUT")

                <div class="mt-4 grid grid-cols-1 gap-6 sm:grid-cols-2">
                    <div>
                        <x-input-label for="name" :value="__('Name')" />
                        <x-text-input
                            type="text"
                            name="name"
                            id="name"
                            value="{{ old('name', auth()->user()->name) }}"
                            required
                        />
                        <x-input-error
                            :messages="$errors->get('name')"
                            class="mt-2"
                        />
                    </div>

                    <div>
                        <x-input-label for="email" :value="__('Email')" />
                        <x-text-input
                            type="email"
                            name="email"
                            id="email"
                            value="{{ old('email', auth()->user()->email) }}"
                            required
                        />
                        <x-input-error
                            :messages="$errors->get('email')"
                            class="mt-2"
                        />
                    </div>

                    <div>
                        <x-input-label
                            for="password"
                            :value="__('Password')"
                        />
                        <x-text-input
                            type="password"
                            name="password"
                            id="password"
                        />
                        <x-input-error
                            :messages="$errors->get('password')"
                            class="mt-2"
                        />
                    </div>

                    <div>
                        <x-input-label
                            for="password_confirmation"
                            :value="__('Confirm Password')"
                        />
                        <x-text-input
                            type="password"
                            name="password_confirmation"
                            id="password_confirmation"
                        />
                        <x-input-error
                            :messages="$errors->get('password_confirmation')"
                            class="mt-2"
                        />
                    </div>
                </div>

                <div class="mt-4 flex justify-end">
                    <x-primary-button>
                        {{ __("Submit") }}
                    </x-primary-button>
                </div>
            </form>
        </div>
    </div>
</x-app-layout>
