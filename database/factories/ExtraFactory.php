<?php

namespace Database\Factories;

use App\Models\Extra;
use Illuminate\Database\Eloquent\Factories\Factory;

class ExtraFactory extends Factory
{
    protected $model = Extra::class;

    public function definition(): array
    {
        return [
            'price' => fake()->numberBetween(20, 50),
            'name' => fake()->name(),
            'description' => fake()->optional()->sentence(),
        ];
    }
}
