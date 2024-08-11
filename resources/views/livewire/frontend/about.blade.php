<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout("layouts.frontend")] class extends Component {
    //
}; ?>

<div>
    <x-frontend.breadcrumb
        :links="[
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'About Page'],
        ]"
        :title="'About Us'"
        :description="'Learn more about FreeCoderTeam, our mission, values, and the high-quality web development services we offer to startups, SaaS, and businesses.'"
    ></x-frontend.breadcrumb>
    <x-frontend.about></x-frontend.about>
</div>
