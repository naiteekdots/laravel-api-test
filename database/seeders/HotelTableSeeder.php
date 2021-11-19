<?php

namespace Database\Seeders;

use App\Models\Hotel;
use App\Models\Review;
use Illuminate\Database\Seeder;

class HotelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Hotel::factory()->count(20)->hasReviews(rand(1,5))->create();
    }
}
