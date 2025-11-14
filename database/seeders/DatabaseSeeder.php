<?php

namespace Database\Seeders;

use App\Models\Booking;
use App\Models\Owner;
use App\Models\Pet;
use App\Models\Room;
use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        /* Room::factory(5)->create()->each(function ($room) {
              Booking::factory()->create([
                  'id_room' => $room->id,
              ]);

          });
        */
        Pet::factory(10)->create(); // Booking -> Room //Owner -> User

    }
}
