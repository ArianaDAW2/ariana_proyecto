<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class CheckOutPetMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Reservation $reservation)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: '¡Gracias por confiar en HotelForPets!',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.check-out-pet',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
