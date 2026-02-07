<?php

use App\Events\AdminMessageEvent;
use App\Jobs\AdminMessageJob;
use App\Jobs\CancelOldReservationsJob;
use App\Jobs\GenerateClientProfileJob;
use App\Jobs\GeneratePetContractJob;
use App\Jobs\morososWarnJob;
use App\Jobs\SendPetReminderJob;
use App\Mail\AdminMessageMail;
use App\Mail\morososWarnMail;
use App\Mail\SendPetReminderMail;
use App\Models\Invoice;
use App\Models\Pet;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use \App\Mail\CancelOldReservationsMail;

beforeEach(function () {
    Mail::fake();
    Storage::fake();

});
it('E-L-JOB: sends admin message email to users', function () {

    $users = User::factory()->count(3)->create();
    AdminMessageEvent::dispatch('Título test', 'Cuerpo test');
    Mail::assertSentCount(3);

    foreach ($users as $user) {
        Mail::assertSent(AdminMessageMail::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });
    }
});

it('JOB: send cancelled Reservation to his user', function () {
    $reservation = Reservation::factory()->create([
        'status' => 'cancelled'
    ]);
    $job = new CancelOldReservationsJob($reservation);
    $job->handle();
    Mail::assertSent(CancelOldReservationsMail::class,
        function ($mail) use ($reservation) {
            return $mail->hasTo($reservation->user->email);
        });
});
it('JOB: generates client profile pdf', function () {

    $client = User::factory()->create(['name' => 'Juan']);
    Pet::factory()->create(['user_id' => $client->id]);

    $job = new GenerateClientProfileJob($client);
    $job->handle();

    Storage::assertExists("profiles/cliente-{$client->id}-Juan.pdf");
});
it('JOB: generates pet contract pdf', function () {

    $reservation = Reservation::factory()->create();
    $reservation->load('user');

    $job = new GeneratePetContractJob($reservation);
    $job->handle();

    $filename = "reserva-{$reservation->id}-{$reservation->user->name}-{$reservation->start_date->format('Y-m-d')}.pdf";
    Storage::assertExists("contracts/{$filename}");
});
it('JOB: sends morosos warn email to user', function () {

    $invoice = Invoice::factory()->create();
    $invoice->load('reservation.user');

    $job = new morososWarnJob($invoice);
    $job->handle();

    Mail::assertSent(morososWarnMail::class, function ($mail) use ($invoice) {
        return $mail->hasTo($invoice->reservation->user->email);
    });
});
it('JOB: sends pet reminder email to user', function () {
    Mail::fake();

    $reservation = Reservation::factory()->create();
    $reservation->load('user');

    $job = new SendPetReminderJob($reservation);
    $job->handle();

    Mail::assertSent(SendPetReminderMail::class, function ($mail) use ($reservation) {
        return $mail->hasTo($reservation->user->email);
    });
});
