// tests/Feature/Livewire/PetsCrudTest.php

<?php

use App\Models\User;
use App\Models\Pet;
use App\Livewire\PetsCrud;
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

it('guest cannot access pets crud', function () {
    Livewire::test(PetsCrud::class)
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente cannot view pets', function () {
    Livewire::actingAs($this->cliente)
        ->test(PetsCrud::class)
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can view pets', function () {
    Pet::factory()->count(3)->create();

    Livewire::actingAs($this->admin)
        ->test(PetsCrud::class)
        ->assertStatus(200);
});

it('admin can create pet', function () {
    Livewire::actingAs($this->admin)
        ->test(PetsCrud::class)
        ->set('user_id', $this->cliente->id)
        ->set('name', 'Max')
        ->set('species', 'Perro')
        ->set('breed', 'Labrador')
        ->set('age', 3)
        ->set('weight', 25.5)
        ->set('notes', 'Muy juguetón')
        ->call('save')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('pets', [
        'name' => 'Max',
        'species' => 'Perro',
    ]);
});

it('admin can edit pet', function () {
    $pet = Pet::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(PetsCrud::class)
        ->call('edit', $pet)
        ->assertSet('petId', $pet->id)
        ->assertSet('name', $pet->name)
        ->assertSet('isEdit', true);
});

it('admin can update pet', function () {
    $pet = Pet::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(PetsCrud::class)
        ->call('edit', $pet)
        ->set('name', 'Rocky')
        ->set('species', 'Gato')
        ->set('breed', 'Siamés')
        ->set('age', 5)
        ->set('weight', 4.5)
        ->call('update')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('pets', [
        'id' => $pet->id,
        'name' => 'Rocky',
    ]);
});

it('admin can delete pet', function () {
    $pet = Pet::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(PetsCrud::class)
        ->call('delete', $pet)
        ->assertHasNoErrors();

    $this->assertDatabaseMissing('pets', [
        'id' => $pet->id,
    ]);
});

/*
|--------------------------------------------------------------------------
| Filtros
|--------------------------------------------------------------------------
*/

it('admin can filter pets by species', function () {
    Pet::factory()->create(['species' => 'Perro']);
    Pet::factory()->create(['species' => 'Gato']);

    Livewire::actingAs($this->admin)
        ->test(PetsCrud::class)
        ->set('filterSpecies', 'Perro')
        ->assertStatus(200);
});

it('admin can filter pets by weight range', function () {
    Pet::factory()->create(['weight' => 10]);
    Pet::factory()->create(['weight' => 50]);

    Livewire::actingAs($this->admin)
        ->test(PetsCrud::class)
        ->set('minWeight', 5)
        ->set('maxWeight', 20)
        ->assertStatus(200);
});

it('admin can sort pets by name', function () {
    Pet::factory()->create(['name' => 'Zorro']);
    Pet::factory()->create(['name' => 'Alfa']);

    Livewire::actingAs($this->admin)
        ->test(PetsCrud::class)
        ->set('sortByName', true)
        ->assertStatus(200);
});
