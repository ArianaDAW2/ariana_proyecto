<?php

namespace App\Listeners;

use App\Events\ReservationCreatedEvent;
use App\Jobs\procesarPDF;
use App\Mail\ReservationCreatedMail;
use Illuminate\Support\Facades\Mail;

class ReservationCreatedListener
{
    public function handle(ReservationCreatedEvent $event): void
    {

        // Procesar el PDF de forma síncrona para obtener el contenido
        $pdfContent = (new procesarPDF($event->reservation))->handle();

        Mail::to($event->reservation->user->email)->send(
            new ReservationCreatedMail(
                $event->reservation,
                $pdfContent)
        );
    }
}
