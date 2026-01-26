<?php

namespace App\Listeners;

use App\Events\ReservationCreatedEvent;
use App\Mail\ReservationCreatedMail;
use Illuminate\Support\Facades\Mail;

class ReservationCreatedListener
{
    public function handle(ReservationCreatedEvent $event): void
    {

        Mail::to($event->reservation->user->email)->send(
            new ReservationCreatedMail($event->reservation)
        );
    }
}
