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
        $clients = User::role('Cliente')->get();
        $services = Service::all();

        if ($services->isEmpty()) return;

        foreach ($clients as $client) {
            $pets = Pet::where('user_id', $client->id)->get();

            if ($pets->isEmpty()) continue;

            foreach ($pets as $index => $pet) {
                $randomServices = $services->random(rand(1, min(5, $services->count())));
                $totalPrice = $randomServices->sum('base_price');

                $startDate = Carbon::now()->addDays(rand(-120, 30));

                $reservation = Reservation::create([
                    'user_id' => $client->id,
                    'pet_id' => $pet->id,
                    'start_date' => $startDate,
                    'end_date' => $startDate->copy()->addDays(rand(5, 30)),
                    'status' => ['pending', 'confirmed', 'cancelled'][rand(0, 2)],
                    'total_price' => $totalPrice,
                ]);

                $reservation->services()->attach($randomServices->pluck('id'));
            }
        }
    }
}
