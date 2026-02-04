<?php

use App\Models\User;
use App\Models\Payment;
use Database\Seeders\RolePermissionUserSeeder;

beforeEach(function () {
    $this->seed(RolePermissionUserSeeder::class);

    $this->admin = User::factory()->create();
    $this->admin->assignRole('Admin');
});

/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
*/

it('guest cannot access admin panel', function () {
    $this->get('/admin/control-panel')->assertRedirect('/login');
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can access panel', function () {
    $this->actingAs($this->admin)
        ->get('/admin/control-panel')
        ->assertStatus(200);
});

it('admin can access invoices', function () {
    $this->actingAs($this->admin)
        ->get('/admin/invoices')
        ->assertStatus(200);
});

it('admin can access medical records', function () {
    $this->actingAs($this->admin)
        ->get('/admin/medical-records')
        ->assertStatus(200);
});

it('admin can access pets', function () {
    $this->actingAs($this->admin)
        ->get('/admin/Pets')
        ->assertStatus(200);
});

it('admin can access reservations', function () {
    $this->actingAs($this->admin)
        ->get('/admin/reservations')
        ->assertStatus(200);
});

it('admin can access services', function () {
    $this->actingAs($this->admin)
        ->get('/admin/services')
        ->assertStatus(200);
});

it('admin can access users', function () {
    $this->actingAs($this->admin)
        ->get('/admin/users')
        ->assertStatus(200);
});

it('admin can access payments', function () {
    Payment::factory()->count(2)->create();

    $this->actingAs($this->admin)
        ->get('/admin/payments')
        ->assertStatus(200);
});
