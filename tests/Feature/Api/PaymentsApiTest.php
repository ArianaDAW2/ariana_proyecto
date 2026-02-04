// tests/Feature/Api/PaymentsApiTest.php

<?php

use App\Models\User;
use App\Models\Payment;
use Database\Seeders\RolePermissionUserSeeder;
use Laravel\Sanctum\PersonalAccessToken;
use Laravel\Sanctum\Sanctum;

beforeEach(function () {
    $this->seed(RolePermissionUserSeeder::class);
});

/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
*/


it('guest cannot access payments', function () {
    $response = $this->getJson('/api/payments');

    $response->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente cannot access payments', function () {
    $cliente = User::factory()->create();
    $cliente->assignRole('Cliente');
    Sanctum::actingAs($cliente);

    $response = $this->getJson('/api/payments');

    $response->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can access payments', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    Payment::factory()->count(3)->create();

    $response = $this->getJson('/api/payments');

    $response->assertStatus(200);
});
it('can authenticate with custom hashed token', function () {
    $user = User::factory()->create();
    $user->assignRole('Admin');

    //Token
    PersonalAccessToken::create([
        'tokenable_type' => User::class,
        'tokenable_id' => $user->id,
        'name' => 'api-key',
        'token' => hash('sha256', 'mi-token-secreto'),
        'abilities' => ['*'],
    ]);

    $response = $this->withHeaders([
        'Authorization' => 'Bearer mi-token-secreto',
    ])->getJson('/api/payments');

    $response->assertStatus(200);
});
