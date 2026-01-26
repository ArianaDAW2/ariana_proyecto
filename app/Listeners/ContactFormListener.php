<?php

namespace App\Listeners;

use App\Events\ContactFormEvent;
use App\Mail\ContactFormMail;
use Illuminate\Support\Facades\Mail;

class ContactFormListener
{
    public function handle(ContactFormEvent $event): void
    {
        Mail::to('ariana.irissa@gmail.com')->send(new ContactFormMail(
            $event->title,
            $event->email,
            $event->message
        ));
    }
}
