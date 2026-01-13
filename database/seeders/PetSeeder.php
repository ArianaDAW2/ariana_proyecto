<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    public function run(): void
    {
        $client = User::where('email', 'client@mail.es')->first();

        if (!$client) return;

        $pets = [
            [
                'user_id' => $client->id,
                'name' => 'Max',
                'species' => 'Perro',
                'breed' => 'Golden Retriever',
                'age' => 5,
                'weight' => 30.5,
                'notes' => 'Muy amigable, le encantan las pelotas.',
            ],
            [
                'user_id' => $client->id,
                'name' => 'Luna',
                'species' => 'Gato',
                'breed' => 'Siamés',
                'age' => 3,
                'weight' => 4.2,
                'notes' => 'Un poco tímida al principio.',
            ],
            [
                'user_id' => $client->id,
                'name' => 'Rocky',
                'species' => 'Perro',
                'breed' => 'Bulldog Francés',
                'age' => 2,
                'weight' => 12.0,
                'notes' => 'Alérgico al pollo.',
            ],
        ];

        foreach ($pets as $pet) {
            Pet::create($pet);
        }
    }
}
