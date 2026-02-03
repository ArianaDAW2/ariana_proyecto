<?php

namespace Database\Factories;

use App\Models\Invoice;
use App\Models\Reservation;
use Illuminate\Database\Eloquent\Factories\Factory;

class InvoiceFactory extends Factory
{
    protected $model = Invoice::class;

    public function definition(): array
    {
        return [
            'reservation_id' => Reservation::factory(),
            'invoice_number' => 'FAC-' . $this->faker->numerify('######'),
            'total' => $this->faker->randomFloat(2, 50, 500),
            'status' => $this->faker->randomElement(['paid', 'unpaid']),
            'issued_at' => $this->faker->dateTimeBetween('-1 year', 'now'),
        ];
    }
}
