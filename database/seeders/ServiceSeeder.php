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
                'description' => 'Añadido: webcam, comida húmeda y juegos constantes.',
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
                'description' => 'Revisión general y aviso de pagos extra por llamada.',
                'base_price' => 30.00,
                'is_active' => true,
            ],
            [
                'name' => 'Adiestramiento Básico',
                'description' => 'Sesión de obediencia básica y juegos.',
                'base_price' => 40.00,
                'is_active' => true,
            ],
            [
                'name' => 'Cirujía',
                'description' => 'Mayoría de operaciones.',
                'base_price' => 500.00,
                'is_active' => false,
            ],
            [
                'name' => 'Dentista',
                'description' => 'Tratamiento dental y limpieza',
                'base_price' => 50.00,
                'is_active' => false,
            ],
            [
                'name' => 'Animales exóticos',
                'description' => 'Atención especial por especie',
                'base_price' => 100.00,
                'is_active' => false,
            ],
        ];

        foreach ($services as $service) {
            Service::create($service);
        }
    }
}
