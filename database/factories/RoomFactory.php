<?php

namespace Database\Factories;

use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class RoomFactory extends Factory
{
    protected $model = Room::class;

    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'description' => fake()->optional()->sentence(),
            'photo' => fake()->optional()->imageUrl(),
            'price_day' => fake()->numberBetween(20, 200),
            'size' => fake()->randomElement(['Pequeña', 'Mediana', 'Grande']),
        ];
    }
}
