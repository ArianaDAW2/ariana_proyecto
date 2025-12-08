<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Owner;
use App\Models\Pet;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    // Many
    protected $model = Pet::class;

    public function definition(): array
    {
        return [
            'id_owner' => Owner::factory(),
            'id_booking' => Booking::factory(),

            'name' => fake()->name(),
            'breed' => fake()->randomElement([
                'Común Europeo',
                'Naranja',
                'Blanco',
                'Negro',
                'Tricolor',
            ]),
            'sex' => fake()->randomElement(['Macho', 'Hembra']),
            'info' => fake()->optional()->sentence(),
            'photo' => fake()->optional()->imageUrl(),
        ];

    }
}
