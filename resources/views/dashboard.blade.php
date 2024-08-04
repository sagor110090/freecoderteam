<x-app-layout>
    <x-slot name="header">
        {{ __("Dashboard") }}
    </x-slot>

    <div class="overflow-hidden bg-white shadow-sm sm:rounded-lg">
        <div class="border-b border-gray-200 p-6">
            {{ __("You are logged in!") }}
        </div>
    </div>
</x-app-layout>
