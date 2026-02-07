<?php

use App\Livewire\UsersCrud;
use App\Models\User;
use Database\Seeders\RolePermissionUserSeeder;
use Livewire\Livewire;

beforeEach(function () {
    $this->seed(RolePermissionUserSeeder::class);

    $this->admin = User::where('name', 'admin')->first();

    $this->cliente = User::factory()->create();
    $this->cliente->assignRole('Cliente');
});

/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
*/

it('guest cannot access users crud', function () {
    Livewire::test(UsersCrud::class)
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente cannot view users', function () {
    Livewire::actingAs($this->cliente)
        ->test(UsersCrud::class)
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can view users', function () {
    Livewire::actingAs($this->admin)
        ->test(UsersCrud::class)
        ->assertStatus(200);
});

it('admin can create user', function () {
    Livewire::actingAs($this->admin)
        ->test(UsersCrud::class)
        ->set('name', 'Nuevo Usuario')
        ->set('email', 'nuevo@example.com')
        ->set('password', 'password123')
        ->call('save')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('users', [
        'name' => 'Nuevo Usuario',
        'email' => 'nuevo@example.com',
    ]);
});

it('admin can edit user', function () {
    $user = User::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(UsersCrud::class)
        ->call('edit', $user)
        ->assertSet('userId', $user->id)
        ->assertSet('name', $user->name)
        ->assertSet('email', $user->email)
        ->assertSet('isEdit', true);
});

it('admin can update user', function () {
    $user = User::factory()->create([
        'name' => 'Original',
        'email' => 'original@example.com',
    ]);

    Livewire::actingAs($this->admin)
        ->test(UsersCrud::class)
        ->call('edit', $user)
        ->set('name', 'Actualizado')
        ->set('email', 'actualizado@example.com')
        ->call('update')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('users', [
        'id' => $user->id,
        'name' => 'Actualizado',
        'email' => 'actualizado@example.com',
    ]);
});

it('admin can update user without changing password', function () {
    $user = User::factory()->create();
    $originalPassword = $user->password;

    Livewire::actingAs($this->admin)
        ->test(UsersCrud::class)
        ->call('edit', $user)
        ->set('name', 'Nombre Nuevo')
        ->set('password', '')
        ->call('update')
        ->assertHasNoErrors();

    $user->refresh();
    expect($user->name)->toBe('Nombre Nuevo')
        ->and($user->password)->toBe($originalPassword);
});

it('admin can delete user', function () {
    $user = User::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(UsersCrud::class)
        ->call('delete', $user)
        ->assertHasNoErrors();

    $this->assertDatabaseMissing('users', [
        'id' => $user->id,
    ]);
});

/*
|--------------------------------------------------------------------------
| Validación
|--------------------------------------------------------------------------
*/

it('save validates required fields', function () {
    Livewire::actingAs($this->admin)
        ->test(UsersCrud::class)
        ->set('name', null)
        ->set('email', null)
        ->set('password', null)
        ->call('save')
        ->assertHasErrors(['name', 'email', 'password']);
});
