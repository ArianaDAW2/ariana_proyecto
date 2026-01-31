<?php

namespace App\Events;

use App\Models\Reservation;
use Illuminate\Foundation\Events\Dispatchable;

class ReservationReminderEvent
{
    use Dispatchable;

    public function __construct(public Reservation $reservation)
    {
    }
}
