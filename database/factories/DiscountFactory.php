<?php

namespace Database\Factories;

use App\Models\Discount;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class DiscountFactory extends Factory
{
    protected $model = Discount::class;

    public function definition(): array
    {
        return [
            'percentage' => fake()->numberBetween(80, 100),
            'min_days' => fake()->numberBetween(1, 10),
        ];
    }
}
