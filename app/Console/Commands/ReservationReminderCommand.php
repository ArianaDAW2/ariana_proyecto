<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Events\ReservationReminderEvent;
use App\Models\Reservation;

class ReservationReminderCommand extends Command
{
    protected $signature = 'admin:reminder';
    protected $description = 'Comprueba que funcionan los recordatorios';

    public function handle(): void
    {
        $reservation = Reservation::first();

        if ($reservation) {
            ReservationReminderEvent::dispatch($reservation);
            $this->info('Evento disparado para reserva: ' . $reservation->id);
        } else {
            $this->error('No hay reservas');
        }
    }
}
