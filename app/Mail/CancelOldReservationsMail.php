<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CancelOldReservationsMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Reservation $reservation)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reserva cancelada HotelForPets',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.cancel-old-reservations',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
