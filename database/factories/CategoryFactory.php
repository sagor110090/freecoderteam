<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->unique()->randomElement(['Technology', 'Health', 'Sports', 'Science', 'Politics']),
            'slug' => $this->faker->unique()->slug(),
            'is_active' => $this->faker->boolean(90),
            'meta_title' => $this->faker->sentence(),
            'meta_description' => $this->faker->paragraph(),
            'meta_keywords' => $this->faker->words(5, true),
        ];
    }
}
