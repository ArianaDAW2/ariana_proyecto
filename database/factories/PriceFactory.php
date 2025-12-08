<?php

namespace Database\Factories;

use App\Models\Discount;
use App\Models\Extra;
use App\Models\Price;
use App\Models\Room;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class PriceFactory extends Factory
{
    protected $model = Price::class;

    public function definition(): array
    {
        return [
            'id_discount' => Discount::factory(),
            'id_room' => Room::factory(),

            'total_extra' => $this->faker->numberBetween(20, 40),
            'total_pet' => $this->faker->numberBetween(1, 7),
            'total_days' => $this->faker->numberBetween(1, 90),

            'total_price' => function (array $attributes) {
                // Prueba de cálculo en la DB
                $room = Room::find($attributes['id_room']);
                $discount = Discount::find($attributes['id_discount']);

                return ($attributes['total_pet']
                    * $room->price_day
                    * $attributes['total_days'])
                    * $discount->percentage/100
                    + $attributes['total_extra'];

            },
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
