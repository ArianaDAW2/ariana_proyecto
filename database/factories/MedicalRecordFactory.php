<?php

namespace Database\Factories;

use App\Models\MedicalRecord;
use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

class MedicalRecordFactory extends Factory
{
    protected $model = MedicalRecord::class;

    public function definition(): array
    {
        return [
            'pet_id' => Pet::factory(),
            'veterinarian_id' => User::factory(),
            'diagnosis' => $this->faker->sentence(10),
            'treatment' => $this->faker->optional()->paragraph(),
            'notes' => $this->faker->optional()->sentence(),
        ];
    }
}
