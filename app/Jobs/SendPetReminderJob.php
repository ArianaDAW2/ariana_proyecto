<?php

namespace App\Jobs;

use App\Mail\SendPetReminderMail;
use App\Models\Reservation;
use Illuminate\Bus\Queueable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Support\Facades\Mail;

class SendPetReminderJob implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    public function __construct(public Reservation $reservation)
    {
    }

    public function handle(): void
    {
        Mail::to($this->reservation->user->email)->send(
            new SendPetReminderMail($this->reservation)
        );
    }
}
