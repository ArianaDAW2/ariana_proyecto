<?php

use App\Events\CheckOutPetEvent;
use App\Events\ContactFormEvent;
use App\Events\ReservationCreatedEvent;
use App\Events\ReservationReminderEvent;
use App\Events\UserRegisteredEvent;
use App\Mail\CheckOutPetMail;
use App\Mail\ContactFormMail;
use App\Mail\ReservationCreatedMail;
use App\Mail\ReservationReminderMail;
use App\Mail\UserRegisteredMail;
use App\Models\Reservation;
use App\Models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;

beforeEach(function () {
    Mail::fake();
});
it('E-Listener: sends email to user with pet check out', function () {

    $reservation = Reservation::factory()->create();

    CheckOutPetEvent::dispatch($reservation);

    Mail::assertSent(CheckOutPetMail::class, function ($mail) use ($reservation) {
        return $mail->hasTo($reservation->user->email);
    });
});
it('E-Listener: sends contact form email to admin', function () {

    ContactFormEvent::dispatch('Asunto test', 'cliente@test.com', 'Mensaje de prueba');

    Mail::assertSent(ContactFormMail::class, function ($mail) {
        return $mail->hasTo('ariana.irissa@gmail.com');
    });
});
it('E-Listener: sends reservation created email with PDF to user', function () {

    $reservation = Reservation::factory()->create();

    ReservationCreatedEvent::dispatch($reservation);

    Mail::assertSent(ReservationCreatedMail::class, function ($mail) use ($reservation) {
        return $mail->hasTo($reservation->user->email);
    });
});
it('E-Listener: sends reservation reminder email to user', function () {

    $reservation = Reservation::factory()->create();

    ReservationReminderEvent::dispatch($reservation);

    Mail::assertSent(ReservationReminderMail::class, function ($mail) use ($reservation) {
        return $mail->hasTo($reservation->user->email);
    });
});
it('E-Listener: sends welcome email when user registers', function () {

    $user = User::factory()->create();

    UserRegisteredEvent::dispatch($user);

    Mail::assertSent(UserRegisteredMail::class, function ($mail) use ($user) {
        return $mail->hasTo($user->email);
    });
});
