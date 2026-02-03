<?php

namespace App\Listeners;

use App\Events\ReservationReminderEvent;
use App\Mail\ReservationReminderMail;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Mail;

class ReservationReminderListener implements ShouldQueue
{
    public function __construct()
    {
    }

    public function handle(ReservationReminderEvent $event): void
    {
        Mail::to($event->reservation->user->email)->send(
            new ReservationReminderMail($event->reservation)
        );
    }
}
