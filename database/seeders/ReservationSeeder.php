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
        Reservation::create([
            'user_id' => User::first()->id,
            'pet_id' => Pet::first()->id,
            'start_date' => now()->addDays(1),
            'end_date' => now()->addDays(5),
            'status' => 'pending',
            'total_price' => 100,
        ]);

        Reservation::create([
            'user_id' => User::first()->id,
            'pet_id' => Pet::first()->id,
            'start_date' => now()->subDays(5),
            'end_date' => now(),
            'status' => 'confirmed',
            'total_price' => 150,
        ]);

        $clients = User::role('Cliente')->get();
        $services = Service::active()->get();

        foreach ($clients as $client) {
            $pets = Pet::where('user_id', $client->id)->get();

            if ($pets->isEmpty()) continue;

            foreach ($pets as $pet) {
                $randomServices = $services->random(rand(1, min(5, $services->count())));
                $totalPrice = $randomServices->sum('base_price');

                $startDate = Carbon::now()->addDays(rand(-120, 30));

                $reservation = Reservation::create([
                    'user_id' => $client->id,
                    'pet_id' => $pet->id,
                    'start_date' => $startDate,
                    'end_date' => $startDate->copy()->addDays(rand(1, 7)),
                    'status' => ['pending', 'confirmed', 'cancelled', 'completed'][rand(0, 3)],
                    'total_price' => $totalPrice,
                ]);

                $reservation->services()->attach($randomServices->pluck('id'));
            }
        }

    }


}
