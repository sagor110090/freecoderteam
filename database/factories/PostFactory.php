<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = \App\Models\Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'title' => $this->faker->sentence(),
            'slug' => $this->faker->slug(),
            'image' => 'posts/' . $this->faker->image('storage/app/public/posts', 640, 480, null, false),
            'description' => $this->faker->paragraph(10),
            'visitor' => $this->faker->numberBetween(100, 1000),
            'published_at' => $this->faker->dateTimeBetween('-1 years', 'now'),
            'is_featured' => $this->faker->boolean(50),
            'is_active' => $this->faker->boolean(90),
            'meta_title' => $this->faker->sentence(),
            'meta_description' => $this->faker->paragraph(),
            'meta_keywords' => $this->faker->words(5, true),
        ];
    }

    public function configure()
    {
        return $this->afterCreating(function (\App\Models\Post $post) {
            $post->categories()->attach(\App\Models\Category::factory()->create());
            $post->tags()->attach(\App\Models\Tag::factory()->create());
        });
    }
}
