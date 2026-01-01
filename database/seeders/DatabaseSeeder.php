<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\User;
use FontLib\Table\Type\name;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    use WithoutModelEvents;

    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Ariana',
            'email' => 'admin@mail.es',
            'password' => '12345678',
        ]);
    }
}
