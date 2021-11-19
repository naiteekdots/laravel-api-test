<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HotelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition() {
        $suppliers = ['Admin', 'Hotelbeds', 'SunHotels'];
        $status = ['Active', 'Inactive'];
        return [
            'name' => $this->faker->name(),
            'supplier' => $suppliers[rand(0,2)],
            'status' => $status[rand(0,1)],
            'rating' => rand(1,5),
            'address' => $this->faker->address(),
        ];
    }
}
