<?php

namespace App\Listeners;

use App\Events\UserRegisteredEvent;
use App\Mail\UserRegisteredMail;
use Illuminate\Support\Facades\Mail;

class UserRegisteredListener
{
    public function __construct()
    {
    }

    public function handle(UserRegisteredEvent $event): void
    {
        Mail::to($event->user->email)->send(
            new UserRegisteredMail($event->user)
        );
    }
}
