<?php

namespace Database\Factories;

use App\Models\Hotel;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReviewFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        return [
            'hotel_id' => $this->faker->randomElement(Hotel::pluck('id')->toArray()),
            'review_title' =>  $this->faker->sentence,
            'author' => $this->faker->name(),
            'rating' => rand(1,5),
            'description' => $this->faker->realText,
        ];
    }
}
