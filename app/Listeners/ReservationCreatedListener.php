<?php

namespace App\Listeners;

use App\Events\ReservationCreatedEvent;
use App\Mail\ReservationCreatedMail;
use Barryvdh\DomPDF\Facade\Pdf;
use Illuminate\Support\Facades\Mail;

class ReservationCreatedListener
{
    public function handle(ReservationCreatedEvent $event): void
    {
        $pdf = Pdf::loadView('pdf.reservation', [
            'reservation' => $event->reservation
        ]);

        Mail::to($event->reservation->user->email)->send(
            new ReservationCreatedMail(
                $event->reservation,
                $pdf->output()
            ));
    }
}
