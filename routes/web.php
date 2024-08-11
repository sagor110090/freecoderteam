<?php

use Illuminate\Support\Facades\Route;
use Livewire\Volt\Volt;

// Frontend Routes

Volt::route('/signin', 'frontend.signin')->name('login');
Volt::route('/signup', 'frontend.signup')->name('register');

Volt::route('/', 'frontend.home')->name('home');
Volt::route('/about', 'frontend.about')->name('about');
Volt::route('/blogs', 'frontend.blog')->name('blog');
Volt::route('/blog-single', 'frontend.blog-single')->name('blog-single');
Volt::route('/contact', 'frontend.contact')->name('contact');
Volt::route('/services', 'frontend.service')->name('services');
Volt::route('/service-single', 'frontend.service-single')->name('service-single');
Volt::route('/portfolios', 'frontend.portfolio')->name('portfolios');
Volt::route('/portfolio-single', 'frontend.portfolio-single')->name('portfolio-single');
Volt::route('/team', 'frontend.team')->name('team');
Volt::route('/faq', 'frontend.faq')->name('faq');

// Admin Routes

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', App\Livewire\Profile\Index::class)->name('profile.edit');
    Route::get('categories', App\Livewire\Category\Index::class)->name('categories.index');
    Route::get('tags', App\Livewire\Tag\Index::class)->name('tags.index');
    Route::get('posts', App\Livewire\Post\Index::class)->name('posts.index');
    Route::get('posts/create', App\Livewire\Post\CreatePost::class)->name('posts.create');
    Route::get('posts/{id}/edit', App\Livewire\Post\EditPost::class)->name('posts.edit');
    Route::get('pages', App\Livewire\Page\Index::class)->name('pages.index');
    Route::get('pages/create', App\Livewire\Page\CreatePage::class)->name('pages.create');
    Route::get('pages/{id}/edit', App\Livewire\Page\EditPage::class)->name('pages.edit');
    Route::post('image-upload', App\Http\Controllers\Admin\ImageUploadController::class)->name('ckeditor.image-upload');
});

require __DIR__ . '/auth.php';

//Route Hooks - Do not delete//
