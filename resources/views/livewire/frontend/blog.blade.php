<?php

use Livewire\Volt\Component;
use Livewire\Attributes\Layout;

new #[Layout("layouts.frontend")] class extends Component {

    public function with() {
        return [
            "posts" => \App\Models\Post::latest()->paginate(3)
        ];
    }

}; ?>

<div>
    <x-frontend.breadcrumb
        :links="[
            ['name' => 'Home', 'url' => route('home')],
            ['name' => 'Blog']
        ]"
        :title="'Blog'"
        :description="'Our blog posts cover a wide range of topics, including web development, digital marketing, design, and coding tips.'"
    ></x-frontend.breadcrumb>

    <x-frontend.blog :posts="$posts" />
</div>
