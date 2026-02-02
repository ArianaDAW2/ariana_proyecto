<?php

namespace App\Console\Commands;

use App\Jobs\SendPetReminderJob;
use App\Models\Reservation;
use Illuminate\Console\Command;

class SendPetReminderCommand extends Command
{
    protected $signature = 'admin:pos-reminder';

    protected $description = 'Avisa el día a recoger la mascota';

    public function handle(): void
    {
        $reservations = Reservation::where('status', 'confirmed')
            ->whereDate('end_date', today())
            ->with(['user', 'pet'])
            ->get();

        foreach ($reservations as $reservation) {
            SendPetReminderJob::dispatch($reservation);
        }

        $this->info("Recordatorios enviados: {$reservations->count()}");
    }
}
