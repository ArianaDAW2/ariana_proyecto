<?php

namespace App\Listeners;

use App\Events\ContactFormSubmitEvent;
use App\Mail\ContactMail;
use Illuminate\Support\Facades\Mail;

class SendContactEmailListener
{
    public function handle(ContactFormSubmitEvent $event): void
    {
        Mail::to('1885979@alu.murciaeduca.es')->send(new ContactMail(
            $event->title,
            $event->email,
            $event->message
        ));
    }
}
