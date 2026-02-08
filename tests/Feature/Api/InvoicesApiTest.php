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

    $this->admin = User::where('name', 'admin')->first();
    $this->cliente = User::where('name', 'cliente')->first();
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

    Sanctum::actingAs($this->cliente);
    $response = $this->getJson('/api/invoices');

    $response->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Con permisos
|--------------------------------------------------------------------------
*/

it('admin can list invoices', function () {

    Sanctum::actingAs($this->admin);

    Invoice::factory()->count(3)->create();

    $response = $this->getJson('/api/invoices');

    $response->assertStatus(200)
        ->assertJsonStructure([
            'invoices' => [
                'data'
            ]
        ]);
});

it('admin can create invoice', function () {

    Sanctum::actingAs($this->admin);

    $reservation = Reservation::factory()->create();

    $response = $this->postJson('/api/invoices', [
        'reservation_id' => $reservation->id,
        'invoice_number' => 'TEST-001',
        'total' => 150.00,
        'status' => 'unpaid',
        'issued_at' => '2026-02-04',
    ]);

    $response->assertStatus(201)
        ->assertJson([
            'invoice_number' => 'TEST-001',
            'total' => 150.00,
        ]);

    $this->assertDatabaseHas('invoices', [
        'invoice_number' => 'TEST-001',
    ]);
});

it('admin can view single invoice', function () {

    Sanctum::actingAs($this->admin);

    $invoice = Invoice::factory()->create();

    $response = $this->getJson("/api/invoices/{$invoice->id}");

    $response->assertStatus(200)
        ->assertJson([
            'id' => $invoice->id,
            'invoice_number' => $invoice->invoice_number,
        ]);
});

it('admin can update invoice', function () {

    Sanctum::actingAs($this->admin);

    $invoice = Invoice::factory()->create();

    $response = $this->putJson("/api/invoices/{$invoice->id}", [
        'reservation_id' => $invoice->reservation_id,
        'invoice_number' => 'TEST-UPDATED',
        'total' => 200.00,
        'status' => 'paid',
        'issued_at' => '2026-02-04',
    ]);

    $response->assertStatus(200)
        ->assertJson([
            'invoice_number' => 'TEST-UPDATED',
            'status' => 'paid',
        ]);

    $this->assertDatabaseHas('invoices', [
        'id' => $invoice->id,
        'invoice_number' => 'TEST-UPDATED',
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
| Token
|--------------------------------------------------------------------------
*/

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
