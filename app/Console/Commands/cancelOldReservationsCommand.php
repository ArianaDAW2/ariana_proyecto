<?php

namespace App\Console\Commands;

use App\Jobs\CancelOldReservationsJob;
use App\Models\Reservation;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\Artisan;

class cancelOldReservationsCommand extends Command
{
    protected $signature = 'admin:cancel';

    protected $description = 'Cancela las reservas que llevan más de 1 día';

    public function handle(): void
    {
        $reservations = Reservation::where('status', 'pending')
            ->where('start_date', '<', now()->subDays())
            ->get();

        foreach ($reservations as $reservation) {
            $reservation->update(['status' => 'cancelled']);
            CancelOldReservationsJob::dispatch($reservation);
        }
        Artisan::call('admin:message');
        $this->info("Reservas pendientes canceladas: {$reservations->count()}");
    }
}
