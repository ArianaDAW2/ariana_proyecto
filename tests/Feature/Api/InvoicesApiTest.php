// tests/Feature/Api/InvoicesApiTest.php

<?php

use App\Models\User;
use App\Models\Invoice;
use App\Models\Reservation;
use Database\Seeders\RolePermissionUserSeeder;
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

beforeEach(function () {
    $this->seed(RolePermissionUserSeeder::class);
});

/*
|--------------------------------------------------------------------------
| Autenticación
|--------------------------------------------------------------------------
*/


it('guest cannot access invoices', function () {
    $response = $this->getJson('/api/invoices');

    $response->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Sin permisos
|--------------------------------------------------------------------------
*/

it('user without permission cannot list invoices', function () {
    $user = User::factory()->create();

    Sanctum::actingAs($user);
    $response = $this->getJson('/api/invoices');

    $response->assertStatus(403);
});

it('user without permission cannot create invoice', function () {
    $user = User::factory()->create();
    Sanctum::actingAs($user);

    $reservation = Reservation::factory()->create();

    $response = $this->postJson('/api/invoices', [
        'reservation_id' => $reservation->id,
        'invoice_number' => 'FAC-001',
        'total' => 100.00,
        'status' => 'unpaid',
        'issued_at' => '2026-02-04',
    ]);

    $response->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Con permisos (Admin / Recepcionista)
|--------------------------------------------------------------------------
*/

it('admin can list invoices', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    Invoice::factory()->count(3)->create();

    $response = $this->getJson('/api/invoices');

    $response->assertStatus(200)
        ->assertJsonStructure([
            'invoices' => [
                'data'
            ]
        ]);
});

it('recepcionista can list invoices', function () {
    $recep = User::factory()->create();
    $recep->assignRole('Recepcionista');
    Sanctum::actingAs($recep);

    Invoice::factory()->count(2)->create();

    $response = $this->getJson('/api/invoices');

    $response->assertStatus(200);
});

it('admin can create invoice', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    $reservation = Reservation::factory()->create();

    $response = $this->postJson('/api/invoices', [
        'reservation_id' => $reservation->id,
        'invoice_number' => 'FAC-001',
        'total' => 150.00,
        'status' => 'unpaid',
        'issued_at' => '2026-02-04',
    ]);

    $response->assertStatus(201)
        ->assertJson([
            'invoice_number' => 'FAC-001',
            'total' => 150.00,
        ]);

    $this->assertDatabaseHas('invoices', [
        'invoice_number' => 'FAC-001',
    ]);
});

it('admin can view single invoice', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    $invoice = Invoice::factory()->create();

    $response = $this->getJson("/api/invoices/{$invoice->id}");

    $response->assertStatus(200)
        ->assertJson([
            'id' => $invoice->id,
            'invoice_number' => $invoice->invoice_number,
        ]);
});

it('admin can update invoice', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    $invoice = Invoice::factory()->create();

    $response = $this->putJson("/api/invoices/{$invoice->id}", [
        'reservation_id' => $invoice->reservation_id,
        'invoice_number' => 'FAC-UPDATED',
        'total' => 200.00,
        'status' => 'paid',
        'issued_at' => '2026-02-04',
    ]);

    $response->assertStatus(200)
        ->assertJson([
            'invoice_number' => 'FAC-UPDATED',
            'status' => 'paid',
        ]);

    $this->assertDatabaseHas('invoices', [
        'id' => $invoice->id,
        'invoice_number' => 'FAC-UPDATED',
    ]);
});

it('admin can delete invoice', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    $invoice = Invoice::factory()->create();

    $response = $this->deleteJson("/api/invoices/{$invoice->id}");

    $response->assertStatus(204);

    $this->assertDatabaseMissing('invoices', [
        'id' => $invoice->id,
    ]);
});

/*
|--------------------------------------------------------------------------
| Validación
|--------------------------------------------------------------------------
*/

it('cannot create invoice without required fields', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    $response = $this->postJson('/api/invoices', []);

    $response->assertStatus(422)
        ->assertJsonValidationErrors([
            'reservation_id',
            'invoice_number',
            'total',
            'status',
            'issued_at',
        ]);
});

it('cannot create invoice with invalid status', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    $reservation = Reservation::factory()->create();

    $response = $this->postJson('/api/invoices', [
        'reservation_id' => $reservation->id,
        'invoice_number' => 'FAC-001',
        'total' => 100.00,
        'status' => 'invalid_status',
        'issued_at' => '2026-02-04',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['status']);
});

it('cannot create invoice with negative total', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    $reservation = Reservation::factory()->create();

    $response = $this->postJson('/api/invoices', [
        'reservation_id' => $reservation->id,
        'invoice_number' => 'FAC-001',
        'total' => -50.00,
        'status' => 'unpaid',
        'issued_at' => '2026-02-04',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['total']);
});

it('cannot create invoice with non-existent reservation', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    $response = $this->postJson('/api/invoices', [
        'reservation_id' => 99999,
        'invoice_number' => 'FAC-001',
        'total' => 100.00,
        'status' => 'unpaid',
        'issued_at' => '2026-02-04',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['reservation_id']);
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
    ])->getJson('/api/invoices');

    $response->assertStatus(200);
});
