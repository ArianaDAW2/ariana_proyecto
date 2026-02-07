// tests/Feature/Livewire/InvoicesCrudTest.php

<?php

use App\Models\User;
use App\Models\Invoice;
use App\Models\Reservation;
use App\Livewire\InvoicesCrud;
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

it('guest cannot access invoices crud', function () {
    Livewire::test(InvoicesCrud::class)
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Cliente (sin permisos)
|--------------------------------------------------------------------------
*/

it('cliente cannot view invoices', function () {
    Livewire::actingAs($this->cliente)
        ->test(InvoicesCrud::class)
        ->assertStatus(403);
});

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
*/

it('admin can view invoices', function () {
    Invoice::factory()->count(3)->create();

    Livewire::actingAs($this->admin)
        ->test(InvoicesCrud::class)
        ->assertStatus(200)
        ->assertSee('invoices');
});

it('admin can create invoice', function () {
    $reservation = Reservation::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(InvoicesCrud::class)
        ->set('reservation_id', $reservation->id)
        ->set('invoice_number', 'TEST-001')
        ->set('total', 150.00)
        ->set('status', 'unpaid')
        ->set('issued_at', '2026-02-04')
        ->call('save')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('invoices', [
        'invoice_number' => 'TEST-001',
    ]);
});

it('admin can edit invoice', function () {
    $invoice = Invoice::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(InvoicesCrud::class)
        ->call('edit', $invoice)
        ->assertSet('invoiceId', $invoice->id)
        ->assertSet('invoice_number', $invoice->invoice_number)
        ->assertSet('isEdit', true);
});

it('admin can update invoice', function () {
    $invoice = Invoice::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(InvoicesCrud::class)
        ->call('edit', $invoice)
        ->set('invoice_number', 'TEST-UPDATED')
        ->set('status', 'paid')
        ->call('update')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('invoices', [
        'id' => $invoice->id,
        'invoice_number' => 'TEST-UPDATED',
        'status' => 'paid',
    ]);
});

it('admin can delete invoice', function () {
    $invoice = Invoice::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(InvoicesCrud::class)
        ->call('delete', $invoice)
        ->assertHasNoErrors();

    $this->assertDatabaseMissing('invoices', [
        'id' => $invoice->id,
    ]);
});
