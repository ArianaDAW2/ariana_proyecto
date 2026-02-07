<?php

use App\Livewire\ReservationsCrud;
use App\Models\Pet;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Database\Seeders\RolePermissionUserSeeder;
use Livewire\Livewire;

beforeEach(function () {
    $this->seed(RolePermissionUserSeeder::class);

    $this->admin = User::where('name', 'admin')->first();
    $this->cliente = User::where('name', 'cliente')->first();
    $this->pet = Pet::factory()->create(['user_id' => $this->cliente->id]);

    $this->service1 = Service::factory()->create([
        'base_price' => 50.00,
        'is_active' => true,
    ]);
    $this->service2 = Service::factory()->create([
        'base_price' => 30.00,
        'is_active' => true,
    ]);
});

/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
*/

it('guest cannot access reservations crud', function () {
    Livewire::test(ReservationsCrud::class)
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente cannot view reservations', function () {
    Livewire::actingAs($this->cliente)
        ->test(ReservationsCrud::class)
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can view reservations', function () {
    Reservation::factory()->count(3)->create();

    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->assertStatus(200);
});

it('admin can create reservation', function () {
    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->set('user_id', $this->cliente->id)
        ->set('pet_id', $this->pet->id)
        ->set('start_date', now()->addDay()->format('Y-m-d'))
        ->set('end_date', now()->addDays(5)->format('Y-m-d'))
        ->set('status', 'pending')
        ->set('total_price', 80)
        ->set('selectedServices', [$this->service1->id, $this->service2->id])
        ->call('save')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('reservations', [
        'user_id' => $this->cliente->id,
        'pet_id' => $this->pet->id,
        'status' => 'pending',
    ]);
});

it('admin can edit reservation', function () {
    $reservation = Reservation::factory()->create([
        'user_id' => $this->cliente->id,
        'pet_id' => $this->pet->id,
    ]);

    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->call('edit', $reservation)
        ->assertSet('reservationId', $reservation->id)
        ->assertSet('user_id', $this->cliente->id)
        ->assertSet('pet_id', $this->pet->id)
        ->assertSet('isEdit', true);
});

it('admin can update reservation', function () {
    $reservation = Reservation::factory()->create([
        'user_id' => $this->cliente->id,
        'pet_id' => $this->pet->id,
        'status' => 'pending',
    ]);

    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->call('edit', $reservation)
        ->set('status', 'confirmed')
        ->call('update')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('reservations', [
        'id' => $reservation->id,
        'status' => 'confirmed',
    ]);
});

it('admin can delete reservation', function () {
    $reservation = Reservation::factory()->create([
        'user_id' => $this->cliente->id,
        'pet_id' => $this->pet->id,
    ]);

    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->call('delete', $reservation)
        ->assertHasNoErrors();

    $this->assertDatabaseMissing('reservations', [
        'id' => $reservation->id,
    ]);
});

/*
|--------------------------------------------------------------------------
| Sincronización de servicios y mascotas
|--------------------------------------------------------------------------
*/

it('selecting services updates total price', function () {
    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->set('selectedServices', [$this->service1->id, $this->service2->id])
        ->assertSet('total_price', 80.00)
        ->set('selectedServices', [])
        ->assertSet('total_price', 0);
});

it('selecting user loads available pets', function () {
    $otherUser = User::factory()->create();
    $otherPet = Pet::factory()->create(['user_id' => $otherUser->id]);

    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->set('user_id', $this->cliente->id)
        ->assertSet('pet_id', null)
        ->assertCount('availablePets', 1)
        ->set('user_id', $otherUser->id)
        ->assertCount('availablePets', 1)
        ->set('user_id', null)
        ->assertCount('availablePets', 0);
});
