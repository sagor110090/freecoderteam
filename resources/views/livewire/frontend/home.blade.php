<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout('layouts.frontend')] class extends Component {
    public function with() {
        return [
            'posts' => \App\Models\Post::latest()->paginate(3)
        ];
    }
}; ?>

<div>
    <x-frontend.hero/>
    <x-frontend.services/>
    <x-frontend.video/>
    <x-frontend.brands/>
    <x-frontend.about/>
    <livewire:frontend.testimonials/>
    <x-frontend.blog :posts="$posts" :home="true">
        <x-slot:blog-title-block>
            <div class="w-full mx-auto text-center wow fadeInUp" data-wow-delay=".1s"
                style="max-width: 570px; margin-bottom: 100px">
                <h2
                    class="mb-4 text-3xl font-bold !leading-tight text-black dark:text-white sm:text-4xl md:text-[45px]">
                    Our Latest Blogs
                </h2>
                <p class="text-body-color text-base !leading-relaxed md:text-lg">
                    Explore our latest blog posts for insights, tips, and updates on industry trends. Stay informed and
                    inspired with content crafted to help you succeed.
                </p>
            </div>
        </x-slot>
    </x-frontend.blog>
    <x-frontend.contact></x-frontend.contact>
</div>
