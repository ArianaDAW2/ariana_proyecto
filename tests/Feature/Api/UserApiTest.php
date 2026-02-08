// tests/Feature/Api/UsersApiTest.php

<?php

use App\Models\User;
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
| Guest
|--------------------------------------------------------------------------
*/

it('guest cannot access users', function () {
    $this->getJson('/api/users')->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente cannot list users', function () {
    Sanctum::actingAs($this->cliente);

    $this->getJson('/api/users')->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can list users', function () {
    Sanctum::actingAs($this->admin);

    User::factory()->count(3)->create();

    $this->getJson('/api/users')
        ->assertStatus(200)
        ->assertJsonStructure([
            'users' => ['data']
        ]);
});

it('admin can create user', function () {
    Sanctum::actingAs($this->admin);

    $this->postJson('/api/users', [
        'name' => 'Nuevo Usuario',
        'email' => 'nuevo@mail.com',
        'password' => 'password123',
    ])->assertStatus(201)
        ->assertJson(['name' => 'Nuevo Usuario']);

    $this->assertDatabaseHas('users', [
        'email' => 'nuevo@mail.com'
    ]);
});

it('admin can view user', function () {
    Sanctum::actingAs($this->admin);

    $user = User::factory()->create();

    $this->getJson("/api/users/{$user->id}")
        ->assertStatus(200)
        ->assertJson(['id' => $user->id]);
});

it('admin can update user', function () {
    Sanctum::actingAs($this->admin);

    $user = User::factory()->create();

    $this->putJson("/api/users/{$user->id}", [
        'name' => 'Usuario Editado',
        'email' => '123@mail.es',
        'password' => 'password123',
    ])->assertStatus(200)
        ->assertJson(['name' => 'Usuario Editado']);

    $this->assertDatabaseHas('users', ['id' => $user->id, 'name' => 'Usuario Editado']);
});

it('admin can delete user', function () {
    Sanctum::actingAs($this->admin);

    $user = User::factory()->create();

    $this->deleteJson("/api/users/{$user->id}")->assertStatus(204);

    $this->assertDatabaseMissing('users', ['id' => $user->id]);
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
    ])->getJson('/api/users');

    $response->assertStatus(200);
});
