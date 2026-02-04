<?php

use App\Models\User;
use App\Models\Pet;
use App\Models\MedicalRecord;
use Database\Seeders\RolePermissionUserSeeder;
use Laravel\Sanctum\Sanctum;

beforeEach(function () {
    $this->seed(RolePermissionUserSeeder::class);
});

/*
|--------------------------------------------------------------------------
| Autenticación
|--------------------------------------------------------------------------
*/

it('guest cannot access medical records', function () {
    $response = $this->getJson('/api/medical-records');

    $response->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Sin permisos
|--------------------------------------------------------------------------
*/

it('cliente cannot list medical records', function () {
    $user = User::factory()->create();
    $user->assignRole('Cliente');
    Sanctum::actingAs($user);

    $response = $this->getJson('/api/medical-records');

    $response->assertStatus(403);
});

it('recepcionista cannot list medical records', function () {
    $user = User::factory()->create();
    $user->assignRole('Recepcionista');
    Sanctum::actingAs($user);

    $response = $this->getJson('/api/medical-records');

    $response->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Con permisos (Admin / Veterinario / Cuidador)
|--------------------------------------------------------------------------
*/

it('admin can list medical records', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    MedicalRecord::factory()->count(3)->create();

    $response = $this->getJson('/api/medical-records');

    $response->assertStatus(200)
        ->assertJsonStructure([
            'records' => [
                'data'
            ]
        ]);
});

it('veterinario can list medical records', function () {
    $vet = User::factory()->create();
    $vet->assignRole('Veterinario');
    Sanctum::actingAs($vet);

    MedicalRecord::factory()->count(2)->create();

    $response = $this->getJson('/api/medical-records');

    $response->assertStatus(200);
});

it('cuidador can list medical records', function () {
    $cuidador = User::factory()->create();
    $cuidador->assignRole('Cuidador');
    Sanctum::actingAs($cuidador);

    MedicalRecord::factory()->count(2)->create();

    $response = $this->getJson('/api/medical-records');

    $response->assertStatus(200);
});

it('veterinario can create medical record', function () {
    $vet = User::factory()->create();
    $vet->assignRole('Veterinario');
    Sanctum::actingAs($vet);

    $pet = Pet::factory()->create();

    $response = $this->postJson('/api/medical-records', [
        'pet_id' => $pet->id,
        'veterinarian_id' => $vet->id,
        'diagnosis' => 'Infección leve en oído',
        'treatment' => 'Gotas antibióticas 3 veces al día',
        'notes' => 'Revisión en 1 semana',
    ]);

    $response->assertStatus(201)
        ->assertJson([
            'diagnosis' => 'Infección leve en oído',
        ]);

    $this->assertDatabaseHas('medical_records', [
        'diagnosis' => 'Infección leve en oído',
    ]);
});

it('admin can view single medical record', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    $record = MedicalRecord::factory()->create();

    $response = $this->getJson("/api/medical-records/{$record->id}");

    $response->assertStatus(200)
        ->assertJson([
            'id' => $record->id,
        ]);
});

it('veterinario can update medical record', function () {
    $vet = User::factory()->create();
    $vet->assignRole('Veterinario');
    Sanctum::actingAs($vet);

    $record = MedicalRecord::factory()->create();

    $response = $this->putJson("/api/medical-records/{$record->id}", [
        'pet_id' => $record->pet_id,
        'veterinarian_id' => $vet->id,
        'diagnosis' => 'Diagnóstico actualizado',
        'treatment' => 'Nuevo tratamiento',
        'notes' => null,
    ]);

    $response->assertStatus(200)
        ->assertJson([
            'diagnosis' => 'Diagnóstico actualizado',
        ]);

    $this->assertDatabaseHas('medical_records', [
        'id' => $record->id,
        'diagnosis' => 'Diagnóstico actualizado',
    ]);
});

it('admin can delete medical record', function () {
    $admin = User::factory()->create();
    $admin->assignRole('Admin');
    Sanctum::actingAs($admin);

    $record = MedicalRecord::factory()->create();

    $response = $this->deleteJson("/api/medical-records/{$record->id}");

    $response->assertStatus(204);

    $this->assertDatabaseMissing('medical_records', [
        'id' => $record->id,
    ]);
});

/*
|--------------------------------------------------------------------------
| Validación
|--------------------------------------------------------------------------
*/

it('cannot create medical record without required fields', function () {
    $vet = User::factory()->create();
    $vet->assignRole('Veterinario');
    Sanctum::actingAs($vet);

    $response = $this->postJson('/api/medical-records', []);

    $response->assertStatus(422)
        ->assertJsonValidationErrors([
            'pet_id',
            'veterinarian_id',
            'diagnosis',
        ]);
});

it('cannot create medical record with non-existent pet', function () {
    $vet = User::factory()->create();
    $vet->assignRole('Veterinario');
    Sanctum::actingAs($vet);

    $response = $this->postJson('/api/medical-records', [
        'pet_id' => 99999,
        'veterinarian_id' => $vet->id,
        'diagnosis' => 'Test diagnosis',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['pet_id']);
});

it('cannot create medical record with non-existent veterinarian', function () {
    $vet = User::factory()->create();
    $vet->assignRole('Veterinario');
    Sanctum::actingAs($vet);

    $pet = Pet::factory()->create();

    $response = $this->postJson('/api/medical-records', [
        'pet_id' => $pet->id,
        'veterinarian_id' => 99999,
        'diagnosis' => 'Test diagnosis',
    ]);

    $response->assertStatus(422)
        ->assertJsonValidationErrors(['veterinarian_id']);
});
