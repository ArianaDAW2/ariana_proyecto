<?php

use App\Livewire\UsersCrud;
use App\Models\User;
use Database\Seeders\RolePermissionUserSeeder;
use Livewire\Livewire;

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
    ]);

    Livewire::actingAs($this->admin)
        ->test(UsersCrud::class)
        ->call('edit', $user)
        ->set('name', 'Actualizado')
        ->call('update')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('users', [
        'id' => $user->id,
        'name' => 'Actualizado',
    ]);
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
