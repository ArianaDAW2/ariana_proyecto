<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class OwnerFactory extends Factory
{
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'id_user' => User::factory(),
            'phone' => fake()->phoneNumber(),
            'address' => fake()->address(),
            'identification_number' => fake()->unique()->numerify('#########'),
        ];
    }
}
