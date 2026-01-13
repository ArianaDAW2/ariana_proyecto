<?php

namespace Database\Seeders;

use App\Models\Pet;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class ReservationSeeder extends Seeder
{
    public function run(): void
    {
        $client = User::where('email', 'client@mail.es')->first();
        $pets = Pet::where('user_id', $client->id)->get();
        $services = Service::all();

        if ($pets->isEmpty() || $services->isEmpty()) return;

        foreach ($pets as $index => $pet) {
            $reservation = Reservation::create([
                'user_id' => $client->id,
                'pet_id' => $pet->id,
                'start_date' => Carbon::now()->addDays($index * 5),
                'end_date' => Carbon::now()->addDays($index * 5 + 3),
                'status' => 'confirmed',
                'total_price' => 0, // Se calculará después o se pondrá manual
            ]);

            // Asignar servicios aleatorios
            $randomServices = $services->random(rand(1, 2));
            $totalPrice = 0;

            foreach ($randomServices as $service) {
                $price = $service->base_price;
                $reservation->services()->attach($service->id, [
                    'price' => $price,
                    'duration' => 60,
                    'notes' => 'Servicio de prueba',
                ]);
                $totalPrice += $price;
            }

            $reservation->update(['total_price' => $totalPrice]);
        }
    }
}
