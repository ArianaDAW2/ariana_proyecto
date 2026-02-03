<?php

namespace App\Jobs;

use App\Mail\CancelOldReservationsMail;
use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Mail;

class CancelOldReservationsJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Reservation $reservation)
    {

    }

    public function handle(): void
    {
        sleep(10);
        Mail::to($this->reservation->user->email)->send(
            new CancelOldReservationsMail($this->reservation)
        );
    }
}
