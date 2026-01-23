<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\User;
use Illuminate\Database\Seeder;

class PetSeeder extends Seeder
{
    public function run(): void
    {
        $clients = User::role('Cliente')->get();

        $dogs = [
            ['species' => 'Perro', 'breed' => 'Golden Retriever', 'weight' => 30.5],
            ['species' => 'Perro', 'breed' => 'Bulldog Francés', 'weight' => 12.0],
            ['species' => 'Perro', 'breed' => 'Labrador', 'weight' => 28.0],
            ['species' => 'Perro', 'breed' => 'Pastor Alemán', 'weight' => 35.0],
        ];

        $cats = [
            ['species' => 'Gato', 'breed' => 'Siamés', 'weight' => 4.2],
            ['species' => 'Gato', 'breed' => 'Persa', 'weight' => 5.0],
            ['species' => 'Gato', 'breed' => 'Maine Coon', 'weight' => 7.5],
            ['species' => 'Gato', 'breed' => 'Bengalí', 'weight' => 5.5],
        ];

        $dogNames = ['Max', 'Rocky', 'Thor', 'Zeus', 'Bruno', 'Toby'];
        $catNames = ['Luna', 'Mia', 'Nala', 'Cleo', 'Nina', 'Kira'];

        foreach ($clients as $client) {
            // Un perro
            $dog = $dogs[array_rand($dogs)];
            Pet::create([
                'user_id' => $client->id,
                'name' => $dogNames[array_rand($dogNames)],
                'species' => $dog['species'],
                'breed' => $dog['breed'],
                'age' => rand(1, 10),
                'weight' => $dog['weight'],
                'notes' => null,
            ]);

            // Un gato
            $cat = $cats[array_rand($cats)];
            Pet::create([
                'user_id' => $client->id,
                'name' => $catNames[array_rand($catNames)],
                'species' => $cat['species'],
                'breed' => $cat['breed'],
                'age' => rand(1, 15),
                'weight' => $cat['weight'],
                'notes' => null,
            ]);
        }
    }
}
