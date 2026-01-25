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
            $randomServices = $services->random(rand(1, 4));
            $totalPrice = $randomServices->sum('base_price');

            $reservation = Reservation::create([
                'user_id' => $client->id,
                'pet_id' => $pet->id,
                'start_date' => Carbon::now()->addDays($index * 5),
                'end_date' => Carbon::now()->addDays($index * 5 + 3),
                'status' => 'confirmed',
                'total_price' => $totalPrice,
            ]);

            $reservation->services()->attach($randomServices->pluck('id'));
        }
    }
}
