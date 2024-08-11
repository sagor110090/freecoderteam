<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Testimonial>
 */
class TestimonialFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     protected $model = \App\Models\Testimonial::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            //save image in storage/app/public folder
            'image' => 'testimonials/' . $this->faker->image('storage/app/public/testimonials', 640, 480, null, false),
            'designation' => $this->faker->sentence(),
            'rating' => $this->faker->numberBetween(1, 5),
        ];
    }
}
