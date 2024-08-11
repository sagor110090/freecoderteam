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
            ['name' => 'Contact'],
        ]"
        :title="'Contact Us'"
        :description='"Get in touch with FreeCoderTeam for any queries or support. Our team is here to help you."'
    ></x-frontend.breadcrumb>

    <x-frontend.contact></x-frontend.contact>
</div>
