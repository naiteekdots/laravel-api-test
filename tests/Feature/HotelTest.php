<?php

namespace Tests\Feature;

use App\Models\Hotel;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class HotelTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_data() {

        for ($i=0; $i < 10; $i++) {
            $this->get('api/hotel/'.$i)->assertStatus(200);
        }

        // using database record
        $hotels = Hotel::inRandomOrder()->limit(5)->get();
        foreach ($hotels as $key => $hotel) {
            $this->get('api/hotel/2')->assertStatus(200);
        }
    }
}
