<?php

namespace Database\Seeders;

use App\Models\Invoice;
use App\Models\Reservation;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class InvoiceSeeder extends Seeder
{
    public function run(): void
    {
        $reservations = Reservation::all();

        foreach ($reservations as $index => $reservation) {
            Invoice::create([
                'reservation_id' => $reservation->id,
                'invoice_number' => 'FAC-' . str_pad($reservation->id, 5, '0', STR_PAD_LEFT),
                'total' => $reservation->total_price,
                'status' => $index % 2 == 0 ? 'paid' : 'unpaid',
                'issued_at' => Carbon::now(),
            ]);
        }
    }
}
