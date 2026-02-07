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

    $this->pet = Pet::factory()->create();

    $this->service1 = Service::factory()->create([
        'base_price' => 50.00,
        'is_active' => true,
    ]);
    $this->service2 = Service::factory()->create([
        'base_price' => 30.00,
        'is_active' => true,
    ]);
});

// ──────────────────────────────────────────────
// AUTORIZACIÓN
// ──────────────────────────────────────────────

it('guest no puede acceder al componente', function () {
    Livewire::test(ReservationsCrud::class)
        ->assertStatus(403);
});

it('cliente no puede acceder al componente', function () {
    Livewire::actingAs($this->cliente)
        ->test(ReservationsCrud::class)
        ->assertStatus(403);
});

// ──────────────────────────────────────────────
// RENDER
// ──────────────────────────────────────────────

it('admin puede ver el componente con reservas paginadas', function () {
    Reservation::factory()->count(15)->create();

    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->assertOk()
        ->assertViewHas('reservations', fn($reservations) => $reservations->count() === 10);
});

// ──────────────────────────────────────────────
// SAVE
// ──────────────────────────────────────────────

it('admin puede crear una reserva con servicios', function () {
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
        ->assertSet('user_id', null)
        ->assertSet('isEdit', false);

    $reservation = Reservation::first();
    expect($reservation->user_id)->toBe($this->cliente->id)
        ->and($reservation->pet_id)->toBe($this->pet->id)
        ->and($reservation->status)->toBe('pending')
        ->and((float)$reservation->total_price)->toBe(80.0)
        ->and($reservation->services)->toHaveCount(2);
});

it('save valida campos requeridos', function () {
    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->set('user_id', null)
        ->set('pet_id', null)
        ->set('start_date', null)
        ->set('end_date', null)
        ->call('save')
        ->assertHasErrors(['user_id', 'pet_id', 'start_date', 'end_date']);
});

// ──────────────────────────────────────────────
// EDIT
// ──────────────────────────────────────────────

it('admin puede cargar una reserva para editar', function () {
    $reservation = Reservation::factory()->create([
        'user_id' => $this->cliente->id,
        'pet_id' => $this->pet->id,
        'start_date' => '2025-06-01',
        'end_date' => '2025-06-05',
        'status' => 'confirmed',
        'total_price' => 80,
    ]);
    $reservation->services()->attach([$this->service1->id, $this->service2->id]);

    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->call('edit', $reservation)
        ->assertSet('reservationId', $reservation->id)
        ->assertSet('user_id', $this->cliente->id)
        ->assertSet('pet_id', $this->pet->id)
        ->assertSet('start_date', '2025-06-01')
        ->assertSet('end_date', '2025-06-05')
        ->assertSet('status', 'confirmed')
        ->assertSet('total_price', 80)
        ->assertSet('isEdit', true)
        ->assertSet('selectedServices', [$this->service1->id, $this->service2->id]);
});

// ──────────────────────────────────────────────
// UPDATE
// ──────────────────────────────────────────────

/*it('admin puede actualizar una reserva', function () {
    $reservation = Reservation::factory()->create([
        'user_id' => $this->cliente->id,
        'pet_id' => $this->pet->id,
        'status' => 'pending',
        'total_price' => 50,
    ]);

    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->call('edit', $reservation)
        ->set('status', 'confirmed')
        ->set('total_price', 100)
        ->set('selectedServices', [$this->service1->id], [$this->service2->id])
        ->call('update');

    $reservation->refresh();
    expect($reservation->status)->toBe('confirmed')
        ->and((float)$reservation->total_price)->toBe(80.0)
        ->and($reservation->services)->toHaveCount(2);
});*/

// ──────────────────────────────────────────────
// DELETE
// ──────────────────────────────────────────────

it('admin puede eliminar una reserva', function () {
    $reservation = Reservation::factory()->create([
        'user_id' => $this->cliente->id,
        'pet_id' => $this->pet->id,
    ]);

    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->call('delete', $reservation);

    expect(Reservation::find($reservation->id))->toBeNull();
});

// ──────────────────────────────────────────────
// CÁLCULO DE PRECIO (updatedSelectedServices)
// ──────────────────────────────────────────────

it('seleccionar servicios actualiza el precio total', function () {
    Livewire::actingAs($this->admin)
        ->test(ReservationsCrud::class)
        ->set('selectedServices', [$this->service1->id, $this->service2->id])
        ->assertSet('total_price', 80.00)
        ->set('selectedServices', [])
        ->assertSet('total_price', 0);
});
