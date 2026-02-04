// tests/Feature/Api/PetsApiTest.php

<?php

use App\Models\User;
use App\Models\Pet;
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

it('guest cannot access pets', function () {
    $this->getJson('/api/pets')->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente cannot list pets', function () {
    Sanctum::actingAs($this->cliente);

    $this->getJson('/api/pets')->assertStatus(403);
});

it('cliente cannot create pet', function () {
    Sanctum::actingAs($this->cliente);

    $this->postJson('/api/pets', [
        'user_id' => $this->cliente->id,
        'name' => 'Max',
        'species' => 'Perro',
        'breed' => 'Labrador',
        'age' => 3,
        'weight' => 25.5,
    ])->assertStatus(403);
});

it('cliente cannot update pet', function () {
    Sanctum::actingAs($this->cliente);

    $pet = Pet::factory()->create();

    $this->putJson("/api/pets/{$pet->id}", [
        'user_id' => $this->cliente->id,
        'name' => 'Rocky',
        'species' => 'Perro',
        'breed' => 'Labrador',
        'age' => 4,
        'weight' => 26,
    ])->assertStatus(403);
});

it('cliente cannot delete pet', function () {
    Sanctum::actingAs($this->cliente);

    $pet = Pet::factory()->create();

    $this->deleteJson("/api/pets/{$pet->id}")->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can list pets', function () {
    Sanctum::actingAs($this->admin);

    Pet::factory()->count(3)->create();

    $this->getJson('/api/pets')
        ->assertStatus(200)
        ->assertJsonStructure([
            'pets' => ['data']
        ]);
});

it('admin can create pet', function () {
    Sanctum::actingAs($this->admin);

    $this->postJson('/api/pets', [
        'user_id' => $this->admin->id,
        'name' => 'Max',
        'species' => 'Perro',
        'breed' => 'Labrador',
        'age' => 3,
        'weight' => 25.5,
    ])->assertStatus(201)
        ->assertJson(['name' => 'Max']);

    $this->assertDatabaseHas('pets', ['name' => 'Max']);
});

it('admin can view pet', function () {
    Sanctum::actingAs($this->admin);

    $pet = Pet::factory()->create();

    $this->getJson("/api/pets/{$pet->id}")
        ->assertStatus(200)
        ->assertJson(['id' => $pet->id]);
});

it('admin can update pet', function () {
    Sanctum::actingAs($this->admin);

    $pet = Pet::factory()->create();

    $this->putJson("/api/pets/{$pet->id}", [
        'user_id' => $pet->user_id,
        'name' => 'Rocky',
        'species' => 'Gato',
        'breed' => 'Siamés',
        'age' => 5,
        'weight' => 4.5,
    ])->assertStatus(200)
        ->assertJson(['name' => 'Rocky']);

    $this->assertDatabaseHas('pets', ['id' => $pet->id, 'name' => 'Rocky']);
});

it('admin can delete pet', function () {
    Sanctum::actingAs($this->admin);

    $pet = Pet::factory()->create();

    $this->deleteJson("/api/pets/{$pet->id}")->assertStatus(204);

    $this->assertDatabaseMissing('pets', ['id' => $pet->id]);
});

/*
|--------------------------------------------------------------------------
| Validación
|--------------------------------------------------------------------------
*/

it('cannot create pet without required fields', function () {
    Sanctum::actingAs($this->admin);

    $this->postJson('/api/pets', [])
        ->assertStatus(422)
        ->assertJsonValidationErrors(['user_id', 'name', 'species', 'age', 'weight']);
});

it('cannot create pet with invalid user', function () {
    Sanctum::actingAs($this->admin);

    $this->postJson('/api/pets', [
        'user_id' => 99999,
        'name' => 'Max',
        'species' => 'Perro',
        'age' => 3,
        'weight' => 25,
    ])->assertStatus(422)
        ->assertJsonValidationErrors(['user_id']);
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
    ])->getJson('/api/pets');

    $response->assertStatus(200);
});
