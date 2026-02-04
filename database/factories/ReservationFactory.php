<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class ReservationFactory extends Factory
{
    protected $model = Reservation::class;

    public function definition(): array
    {
        $startDate = $this->faker->dateTimeBetween('-1 month', '+1 month');
        $endDate = (clone $startDate)->modify('+' . rand(1, 7) . ' days');

        return [
            'user_id' => User::factory(),
            'pet_id' => Pet::factory(),
            'start_date' => $startDate,
            'end_date' => $endDate,
            'status' => $this->faker->randomElement(['pending', 'confirmed', 'completed', 'cancelled']),
            'total_price' => $this->faker->randomFloat(2, 50, 500),
        ];
    }
}
