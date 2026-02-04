// tests/Feature/Api/ServicesApiTest.php

<?php

use App\Models\User;
use App\Models\Service;
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

it('guest can access services', function () {
    $this->getJson('/api/services')->assertStatus(200);
});

/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente can list services', function () {
    Sanctum::actingAs($this->cliente);

    $this->getJson('/api/services')->assertStatus(200);
});

it('cliente cannot create service', function () {
    Sanctum::actingAs($this->cliente);

    $this->postJson('/api/services', [
        'name' => 'Baño',
        'description' => 'Baño completo para mascotas',
        'base_price' => 25.00,
        'is_active' => true,
    ])->assertStatus(403);
});

it('cliente cannot update service', function () {
    Sanctum::actingAs($this->cliente);

    $service = Service::factory()->create();

    $this->putJson("/api/services/{$service->id}", [
        'name' => 'Baño Premium',
        'description' => 'Baño premium',
        'base_price' => 35.00,
        'is_active' => true,
    ])->assertStatus(403);
});

it('cliente cannot delete service', function () {
    Sanctum::actingAs($this->cliente);

    $service = Service::factory()->create();

    $this->deleteJson("/api/services/{$service->id}")->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can list services', function () {
    Sanctum::actingAs($this->admin);

    Service::factory()->count(3)->create();

    $this->getJson('/api/services')
        ->assertStatus(200)
        ->assertJsonStructure([
            'services' => ['data']
        ]);
});

it('admin can create service', function () {
    Sanctum::actingAs($this->admin);

    $this->postJson('/api/services', [
        'name' => 'Baño',
        'description' => 'Baño completo para mascotas',
        'base_price' => 25.00,
        'is_active' => true,
    ])->assertStatus(201)
        ->assertJson(['name' => 'Baño']);

    $this->assertDatabaseHas('services', ['name' => 'Baño']);
});

it('admin can view service', function () {
    Sanctum::actingAs($this->admin);

    $service = Service::factory()->create();

    $this->getJson("/api/services/{$service->id}")
        ->assertStatus(200)
        ->assertJson(['id' => $service->id]);
});

it('admin can update service', function () {
    Sanctum::actingAs($this->admin);

    $service = Service::factory()->create();

    $this->putJson("/api/services/{$service->id}", [
        'name' => 'Baño Premium',
        'description' => 'Servicio premium',
        'base_price' => 50.00,
        'is_active' => false,
    ])->assertStatus(200)
        ->assertJson(['name' => 'Baño Premium']);

    $this->assertDatabaseHas('services', ['id' => $service->id, 'name' => 'Baño Premium']);
});

it('admin can delete service', function () {
    Sanctum::actingAs($this->admin);

    $service = Service::factory()->create();

    $this->deleteJson("/api/services/{$service->id}")->assertStatus(204);

    $this->assertDatabaseMissing('services', ['id' => $service->id]);
});

/*
|--------------------------------------------------------------------------
| Validación
|--------------------------------------------------------------------------
*/

it('cannot create service without required fields', function () {
    Sanctum::actingAs($this->admin);

    $this->postJson('/api/services', [])
        ->assertStatus(422)
        ->assertJsonValidationErrors(['name', 'base_price', 'is_active']);
});

it('cannot create service with negative price', function () {
    Sanctum::actingAs($this->admin);

    $this->postJson('/api/services', [
        'name' => 'Baño',
        'base_price' => -10.00,
        'is_active' => true,
    ])->assertStatus(422)
        ->assertJsonValidationErrors(['base_price']);
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
    ])->getJson('/api/services');

    $response->assertStatus(200);
});
