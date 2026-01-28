<?php

namespace App\Mail;

use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class ReservationCreatedMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Reservation $reservation,
        public string      $pdfContent)
    {
    }

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Reservation HotelForPets',
        );
    }

    public function content(): Content
    {
        return new Content(
            view: 'emails.reservation-created',
        );
    }

    public function attachments(): array
    {
        return [
            Attachment::fromData(
                fn() => $this->pdfContent,
                'reservation-' . $this->reservation->id . '.pdf'
            )->withMime('application/pdf'),
        ];
    }
}
