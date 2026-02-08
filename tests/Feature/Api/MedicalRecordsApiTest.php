<?php

use App\Models\User;
use App\Models\Pet;
use App\Models\MedicalRecord;
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

it('guest cannot access medical records', function () {
    $response = $this->getJson('/api/medical-records');

    $response->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Cliente
|--------------------------------------------------------------------------
*/

it('cliente cannot list medical records', function () {

    Sanctum::actingAs($this->cliente);

    $response = $this->getJson('/api/medical-records');

    $response->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Con permisos
|--------------------------------------------------------------------------
*/

it('admin can list medical records', function () {

    Sanctum::actingAs($this->admin);

    MedicalRecord::factory()->count(3)->create();

    $response = $this->getJson('/api/medical-records');

    $response->assertStatus(200)
        ->assertJsonStructure([
            'records' => [
                'data'
            ]
        ]);
});

it('admin can create medical record', function () {
    $vet = User::factory()->create();
    $vet->assignRole('Veterinario');
    Sanctum::actingAs($this->admin);

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

    Sanctum::actingAs($this->admin);

    $record = MedicalRecord::factory()->create();

    $response = $this->getJson("/api/medical-records/{$record->id}");

    $response->assertStatus(200)
        ->assertJson([
            'id' => $record->id,
        ]);
});

it('admin can update medical record', function () {
    $vet = User::factory()->create();
    $vet->assignRole('Veterinario');
    Sanctum::actingAs($this->admin);

    $record = MedicalRecord::factory()->create();

    $response = $this->putJson("/api/medical-records/{$record->id}", [
        'pet_id' => $record->pet_id,
        'veterinarian_id' => $vet->id,
        'diagnosis' => 'Diagnóstico actualizado',
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

    Sanctum::actingAs($this->admin);

    $record = MedicalRecord::factory()->create();

    $response = $this->deleteJson("/api/medical-records/{$record->id}");

    $response->assertStatus(204);

    $this->assertDatabaseMissing('medical_records', [
        'id' => $record->id,
    ]);
});

/*
|--------------------------------------------------------------------------
| Token
|--------------------------------------------------------------------------
*/

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
    ])->getJson('/api/medical-records');

    $response->assertStatus(200);
});
