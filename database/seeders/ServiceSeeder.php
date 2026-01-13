<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    public function run(): void
    {
        $services = [
            [
                'name' => 'Alojamiento Estándar',
                'description' => 'Habitación cómoda con paseos diarios.',
                'base_price' => 20.00,
                'is_active' => true,
            ],
            [
                'name' => 'Alojamiento Deluxe',
                'description' => 'Habitación amplia con aire acondicionado y webcam.',
                'base_price' => 35.00,
                'is_active' => true,
            ],
            [
                'name' => 'Peluquería Canina',
                'description' => 'Baño, corte de pelo y uñas.',
                'base_price' => 25.00,
                'is_active' => true,
            ],
            [
                'name' => 'Consulta Veterinaria',
                'description' => 'Revisión general de salud.',
                'base_price' => 30.00,
                'is_active' => true,
            ],
            [
                'name' => 'Adiestramiento Básico',
                'description' => 'Sesión de obediencia básica.',
                'base_price' => 40.00,
                'is_active' => true,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
