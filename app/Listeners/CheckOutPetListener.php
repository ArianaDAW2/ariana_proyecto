<?php

namespace App\Listeners;

use App\Events\CheckOutPetEvent;
use App\Mail\CheckOutPetMail;
use Illuminate\Support\Facades\Mail;

class CheckOutPetListener
{
    public function __construct()
    {
    }

    public function handle(CheckOutPetEvent $event): void
    {
        Mail::to($event->reservation->user->email)->send(
            new CheckOutPetMail($event->reservation)
        );
    }
}
