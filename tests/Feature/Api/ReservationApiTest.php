// tests/Feature/Api/ReservationsApiTest.php

<?php

use App\Models\User;
use App\Models\Pet;
use App\Models\Reservation;
use Database\Seeders\RolePermissionUserSeeder;
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

beforeEach(function () {
    $this->seed(RolePermissionUserSeeder::class);

    $this->admin = User::factory()->create();
    $this->admin->assignRole('Admin');

    $this->cliente = User::factory()->create();
    $this->cliente->assignRole('Cliente');
});

/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
*/

it('guest cannot access reservations', function () {
    $this->getJson('/api/reservations')->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente cannot list reservations', function () {
    Sanctum::actingAs($this->cliente);

    $this->getJson('/api/reservations')->assertStatus(403);
});

it('cliente cannot create reservation', function () {
    Sanctum::actingAs($this->cliente);

    $pet = Pet::factory()->create(['user_id' => $this->cliente->id]);

    $this->postJson('/api/reservations', [
        'user_id' => $this->cliente->id,
        'pet_id' => $pet->id,
        'start_date' => '2026-03-01',
        'end_date' => '2026-03-05',
        'status' => 'pending',
        'total_price' => 150.00,
    ])->assertStatus(403);
});

it('cliente cannot update reservation', function () {
    Sanctum::actingAs($this->cliente);

    $reservation = Reservation::factory()->create();

    $this->putJson("/api/reservations/{$reservation->id}", [
        'user_id' => $reservation->user_id,
        'pet_id' => $reservation->pet_id,
        'start_date' => '2026-03-01',
        'end_date' => '2026-03-05',
        'status' => 'confirmed',
        'total_price' => 200.00,
    ])->assertStatus(403);
});

it('cliente cannot delete reservation', function () {
    Sanctum::actingAs($this->cliente);

    $reservation = Reservation::factory()->create();

    $this->deleteJson("/api/reservations/{$reservation->id}")->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can list reservations', function () {
    Sanctum::actingAs($this->admin);

    Reservation::factory()->count(3)->create();

    $this->getJson('/api/reservations')
        ->assertStatus(200)
        ->assertJsonStructure([
            'reservations' => ['data']
        ]);
});

it('admin can create reservation', function () {
    Sanctum::actingAs($this->admin);

    $pet = Pet::factory()->create();

    $this->postJson('/api/reservations', [
        'user_id' => $pet->user_id,
        'pet_id' => $pet->id,
        'start_date' => '2026-03-01',
        'end_date' => '2026-03-05',
        'status' => 'pending',
        'total_price' => 150.00,
    ])->assertStatus(201)
        ->assertJson(['status' => 'pending']);

    $this->assertDatabaseHas('reservations', ['pet_id' => $pet->id]);
});

it('admin can view reservation', function () {
    Sanctum::actingAs($this->admin);

    $reservation = Reservation::factory()->create();

    $this->getJson("/api/reservations/{$reservation->id}")
        ->assertStatus(200)
        ->assertJson(['id' => $reservation->id]);
});

it('admin can update reservation', function () {
    Sanctum::actingAs($this->admin);

    $reservation = Reservation::factory()->create();

    $this->putJson("/api/reservations/{$reservation->id}", [
        'user_id' => $reservation->user_id,
        'pet_id' => $reservation->pet_id,
        'start_date' => '2026-03-10',
        'end_date' => '2026-03-15',
        'status' => 'confirmed',
        'total_price' => 250.00,
    ])->assertStatus(200)
        ->assertJson(['status' => 'confirmed']);

    $this->assertDatabaseHas('reservations', ['id' => $reservation->id, 'status' => 'confirmed']);
});

it('admin can delete reservation', function () {
    Sanctum::actingAs($this->admin);

    $reservation = Reservation::factory()->create();

    $this->deleteJson("/api/reservations/{$reservation->id}")->assertStatus(204);

    $this->assertDatabaseMissing('reservations', ['id' => $reservation->id]);
});

/*
|--------------------------------------------------------------------------
| Validación
|--------------------------------------------------------------------------
*/

it('cannot create reservation without required fields', function () {
    Sanctum::actingAs($this->admin);

    $this->postJson('/api/reservations', [])
        ->assertStatus(422)
        ->assertJsonValidationErrors(['user_id', 'pet_id', 'start_date', 'end_date', 'status', 'total_price']);
});

it('cannot create reservation with end date before start date', function () {
    Sanctum::actingAs($this->admin);

    $pet = Pet::factory()->create();

    $this->postJson('/api/reservations', [
        'user_id' => $pet->user_id,
        'pet_id' => $pet->id,
        'start_date' => '2026-03-10',
        'end_date' => '2026-03-05',
        'status' => 'pending',
        'total_price' => 150.00,
    ])->assertStatus(422)
        ->assertJsonValidationErrors(['start_date', 'end_date']);
});

it('cannot create reservation with invalid status', function () {
    Sanctum::actingAs($this->admin);

    $pet = Pet::factory()->create();

    $this->postJson('/api/reservations', [
        'user_id' => $pet->user_id,
        'pet_id' => $pet->id,
        'start_date' => '2026-03-01',
        'end_date' => '2026-03-05',
        'status' => 'invalid_status',
        'total_price' => 150.00,
    ])->assertStatus(422)
        ->assertJsonValidationErrors(['status']);
});
it('can authenticate with custom hashed token', function () {
    $user = User::factory()->create();
    $user->assignRole('Admin');

    //token
    PersonalAccessToken::create([
        'tokenable_type' => User::class,
        'tokenable_id' => $user->id,
        'name' => 'api-key',
        'token' => hash('sha256', 'mi-token-secreto'),
        'abilities' => ['*'],
    ]);

    $response = $this->withHeaders([
        'Authorization' => 'Bearer mi-token-secreto',
    ])->getJson('/api/reservations');

    $response->assertStatus(200);
});
