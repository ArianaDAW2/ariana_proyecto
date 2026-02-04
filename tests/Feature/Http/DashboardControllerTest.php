// tests/Feature/Http/DashboardControllerTest.php

<?php

use App\Models\User;
use App\Models\Reservation;
use App\Models\Service;
use Database\Seeders\RolePermissionUserSeeder;

beforeEach(function () {
    $this->seed(RolePermissionUserSeeder::class);

    $this->cliente = User::factory()->create();
    $this->cliente->assignRole('Cliente');
});

/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
*/

it('guest cannot access dashboard', function () {
    $this->get('/client/main')->assertRedirect('/login');
});

it('guest cannot access my reservations', function () {
    $this->get('/client/my_reservations')->assertRedirect('/login');
});

it('guest cannot access top buyers', function () {
    $this->get('/client/top_buyers')->assertRedirect('/login');
});

it('guest cannot access top services', function () {
    $this->get('/client/top_services')->assertRedirect('/login');
});

/*
|--------------------------------------------------------------------------
| Cliente
|--------------------------------------------------------------------------
*/

it('cliente can access dashboard', function () {
    $this->actingAs($this->cliente)
        ->get('/client/main')
        ->assertStatus(200);
});

it('cliente can access my reservations', function () {
    Reservation::factory()->count(2)->create(['user_id' => $this->cliente->id]);

    $this->actingAs($this->cliente)
        ->get('/client/my_reservations')
        ->assertStatus(200);
});

it('cliente can access top buyers', function () {
    $this->actingAs($this->cliente)
        ->get('/client/top_buyers')
        ->assertStatus(200);
});

it('cliente can access top services', function () {
    Service::factory()->count(3)->create();

    $this->actingAs($this->cliente)
        ->get('/client/top_services')
        ->assertStatus(200);
});
