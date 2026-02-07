<?php

use App\Jobs\AdminMessageJob;
use App\Jobs\CancelOldReservationsJob;
use App\Jobs\GenerateClientProfileJob;
use App\Mail\AdminMessageMail;
use App\Models\Pet;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Support\Facades\Mail;
use \App\Mail\CancelOldReservationsMail;

beforeEach(function () {
    Mail::fake();

});
it('sends admin message email to users', function () {

    $users = User::factory()->count(5)->create();
    foreach ($users as $user) {
        $job = new AdminMessageJob($user, 'Asunto de prueba', 'Cuerpo del mensaje');
        $job->handle();
    }
    Mail::assertSentCount(5);
    foreach ($users as $user) {
        Mail::assertSent(AdminMessageMail::class, function ($mail) use ($user) {
            return $mail->hasTo($user->email);
        });
    }
});
it('send cancelled Reservation to his user', function () {
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
it('generates client profile pdf', function () {
    Storage::fake();

    $client = User::factory()->create(['name' => 'Juan']);
    Pet::factory()->create(['user_id' => $client->id]);

    $job = new GenerateClientProfileJob($client);
    $job->handle();

    Storage::assertExists("profiles/cliente-{$client->id}-Juan.pdf");
});
