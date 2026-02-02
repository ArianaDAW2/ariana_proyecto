<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Mail\Mailable;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;

class SendPetReminderMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(public Reservation $reservation)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Recordatorio: Recoge a tu mascota hoy',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.send-pet-reminder',
        );
    }

    public function attachments(): array
    {
        return [];
    }
}
