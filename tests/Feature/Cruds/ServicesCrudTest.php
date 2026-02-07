<?php

use App\Livewire\ServicesCrud;
use App\Models\Service;
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

it('guest can access services crud', function () {
    Livewire::test(ServicesCrud::class)
        ->assertStatus(200);
});
it('guest cannot edit services crud', function () {
    Livewire::test(ServicesCrud::class)
        ->call('edit')
        ->assertStatus(403);
});
/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente can view services', function () {
    Livewire::actingAs($this->cliente)
        ->test(ServicesCrud::class)
        ->assertStatus(200);
});
it('cliente edit create services', function () {
    Livewire::actingAs($this->cliente)
        ->test(ServicesCrud::class)
        ->call('edit')
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can view services', function () {
    Service::factory()->count(3)->create();

    Livewire::actingAs($this->admin)
        ->test(ServicesCrud::class)
        ->assertStatus(200);
});

it('admin can create service', function () {
    Livewire::actingAs($this->admin)
        ->test(ServicesCrud::class)
        ->set('name', 'Baño completo')
        ->set('description', 'Baño con secado y cepillado')
        ->set('base_price', 25.00)
        ->set('is_active', true)
        ->call('save')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('services', [
        'name' => 'Baño completo',
        'base_price' => 25.00,
    ]);
});

it('admin can edit service', function () {
    $service = Service::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(ServicesCrud::class)
        ->call('edit', $service)
        ->assertSet('serviceId', $service->id)
        ->assertSet('name', $service->name)
        ->assertSet('isEdit', true);
});

it('admin can update service', function () {
    $service = Service::factory()->create([
        'name' => 'Paseo',
        'base_price' => 15.00,
    ]);

    Livewire::actingAs($this->admin)
        ->test(ServicesCrud::class)
        ->call('edit', $service)
        ->set('name', 'Paseo premium')
        ->set('base_price', 30.00)
        ->call('update')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('services', [
        'id' => $service->id,
        'name' => 'Paseo premium',
        'base_price' => 30.00,
    ]);
});

it('admin can delete service', function () {
    $service = Service::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(ServicesCrud::class)
        ->call('delete', $service)
        ->assertHasNoErrors();

    $this->assertDatabaseMissing('services', [
        'id' => $service->id,
    ]);
});

/*
|--------------------------------------------------------------------------
| Validación
|--------------------------------------------------------------------------
*/
