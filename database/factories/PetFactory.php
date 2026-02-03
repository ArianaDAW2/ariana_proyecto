<?php

namespace Database\Factories;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class PetFactory extends Factory
{
    // Many
    protected $model = Pet::class;

    public function definition(): array
    {
        $species = $this->faker->randomElement(['perro', 'gato']);

        $breeds = [
            'perro' => ['Labrador', 'Pastor Alemán', 'Bulldog', 'Chihuahua'],
            'gato' => ['Siamés', 'Persa', 'Bengalí', 'Común Europeo'],
        ];

        return [
            'user_id' => User::factory(),
            'name' => $this->faker->firstName(),
            'species' => $species,
            'breed' => $this->faker->optional()->randomElement($breeds[$species]),
            'age' => $this->faker->numberBetween(1, 15),
            'weight' => $this->faker->randomFloat(1, 0.5, 50),
            'notes' => $this->faker->optional()->sentence(),
        ];

    }
}
