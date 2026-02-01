<?php

use App\Models\Reservation;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Events\ReservationReminderEvent;

Artisan::command('inspire', function () {
    $this->comment(Inspiring::quote());
})->purpose('Display an inspiring quote');

//24 h reservas
Schedule::call(function () {
    $reservations = Reservation::whereDate('start_date', today()->addDay())
        ->where('status', 'confirmed')
        ->get();

    foreach ($reservations as $reservation) {
        ReservationReminderEvent::dispatch($reservation);
    }
})->dailyAt('10:00');

Schedule::command('admin:cancel')->dailyAt('11:00');
