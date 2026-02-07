// tests/Feature/Livewire/MedicalRecordsCrudTest.php

<?php

use App\Models\User;
use App\Models\Pet;
use App\Models\MedicalRecord;
use App\Livewire\MedicalRecordsCrud;
use Database\Seeders\RolePermissionUserSeeder;
use Livewire\Livewire;

beforeEach(function () {
    $this->seed(RolePermissionUserSeeder::class);

    $this->admin = User::where('name', 'admin')->first();
    $this->cliente = User::where('name', 'cliente')->first();
    $this->veterinario = User::where('name', 'veterinario')->first();
});

/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
*/

it('guest cannot access medical records crud', function () {
    Livewire::test(MedicalRecordsCrud::class)
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente cannot view medical records', function () {
    Livewire::actingAs($this->cliente)
        ->test(MedicalRecordsCrud::class)
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can view medical records', function () {
    MedicalRecord::factory()->count(3)->create();

    Livewire::actingAs($this->admin)
        ->test(MedicalRecordsCrud::class)
        ->assertStatus(200);
});

it('admin can create medical record', function () {
    $pet = Pet::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(MedicalRecordsCrud::class)
        ->set('pet_id', $pet->id)
        ->set('veterinarian_id', $this->veterinario->id)
        ->set('diagnosis', 'Infección leve')
        ->set('treatment', 'Antibióticos')
        ->set('notes', 'Revisión en 1 semana')
        ->call('save')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('medical_records', [
        'diagnosis' => 'Infección leve',
    ]);
});

it('admin can edit medical record', function () {
    $record = MedicalRecord::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(MedicalRecordsCrud::class)
        ->call('edit', $record)
        ->assertSet('recordId', $record->id)
        ->assertSet('diagnosis', $record->diagnosis)
        ->assertSet('isEdit', true);
});

it('admin can update medical record', function () {
    $record = MedicalRecord::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(MedicalRecordsCrud::class)
        ->call('edit', $record)
        ->set('diagnosis', 'UPDATED')
        ->call('update')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('medical_records', [
        'id' => $record->id,
        'diagnosis' => 'UPDATED',
    ]);
});

it('admin can delete medical record', function () {
    $record = MedicalRecord::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(MedicalRecordsCrud::class)
        ->call('delete', $record)
        ->assertHasNoErrors();

    $this->assertDatabaseMissing('medical_records', [
        'id' => $record->id,
    ]);
});
