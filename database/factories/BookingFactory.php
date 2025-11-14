<?php

namespace Database\Factories;

use App\Models\Booking;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;

class BookingFactory extends Factory
{
    protected $model = Booking::class;

    public function definition(): array
    {
        $startDate = fake()->dateTimeBetween('-1 month', '+1 month'); // fecha de inicio aleatoria
        $endDate = (clone $startDate)->modify('+'.rand(1, 7).' days'); // duración entre 1 y 7 días

        return [
            'id_room' => Room::factory(),
            'date_start' => $startDate->format('Y-m-d'),
            'date_end' => $endDate->format('Y-m-d'),
            'status' => $this->faker->boolean(),
        ];
    }
}
