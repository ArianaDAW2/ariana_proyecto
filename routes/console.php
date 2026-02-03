<?php

use App\Models\Reservation;
use Illuminate\Foundation\Inspiring;
use Illuminate\Support\Facades\Artisan;
use App\Events\ReservationReminderEvent;


Schedule::command('admin:pre-reminder')->dailyAt('11:00');
Schedule::command('admin:cancel')->dailyAt('11:00');
Schedule::command('admin:pos-reminder')->dailyAt('11:00');

/*
 *
 * crontab -e
 * * * * * * cd /opt/lampp/htdocs/proyectos/ariana_proyecto && /opt/lampp/bin/php artisan schedule:run >> /dev/null 2>&1
 *
 */
