<?php

namespace Database\Factories;

use App\Models\Service;
use Illuminate\Database\Eloquent\Factories\Factory;

class ServiceFactory extends Factory
{
    protected $model = Service::class;

    public function definition(): array
    {
        $services = ['Baño', 'Corte de pelo', 'Paseo', 'Alimentación premium', 'Vacunación', 'Desparasitación', 'Guardería nocturna'];

        return [
            'name' => $this->faker->unique()->randomElement($services),
            'description' => $this->faker->optional()->sentence(),
            'base_price' => $this->faker->randomFloat(2, 10, 100),
            'is_active' => $this->faker->boolean(80),
        ];
    }
}
