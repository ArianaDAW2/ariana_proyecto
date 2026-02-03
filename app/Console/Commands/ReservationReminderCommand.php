<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\ReservationReminderEvent;
use App\Models\Reservation;

class ReservationReminderCommand extends Command
{
    protected $signature = 'admin:pre-reminder';
    protected $description = 'Avisa un día de antelación para llevar a la mascota';

    public function handle(): void
    {
        $reservations = Reservation::whereDate('start_date', today()->addDay(1))
            ->where('status', 'pending')
            ->get();

        foreach ($reservations as $reservation) {
            ReservationReminderEvent::dispatch($reservation);
        }

        $this->info("Recordatorios enviados: {$reservations->count()}");
    }

}
