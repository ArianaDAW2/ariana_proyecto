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

    $this->admin = User::factory()->create();
    $this->admin->assignRole('Admin');

    $this->cliente = User::factory()->create();
    $this->cliente->assignRole('Cliente');
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
        ->set('invoice_number', 'FAC-001')
        ->set('total', 150.00)
        ->set('status', 'unpaid')
        ->set('issued_at', '2026-02-04')
        ->call('save')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('invoices', [
        'invoice_number' => 'FAC-001',
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
        ->set('invoice_number', 'FAC-UPDATED')
        ->set('total', 200.00)
        ->set('status', 'paid')
        ->call('update')
        ->assertHasNoErrors();

    $this->assertDatabaseHas('invoices', [
        'id' => $invoice->id,
        'invoice_number' => 'FAC-UPDATED',
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

/*
|--------------------------------------------------------------------------
| Validación
|--------------------------------------------------------------------------
*/

it('cannot create invoice without required fields', function () {
    Livewire::actingAs($this->admin)
        ->test(InvoicesCrud::class)
        ->set('reservation_id', '')
        ->set('invoice_number', '')
        ->set('total', '')
        ->call('save')
        ->assertHasErrors(['reservation_id', 'invoice_number', 'total']);
});

it('cannot create invoice with invalid status', function () {
    $reservation = Reservation::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(InvoicesCrud::class)
        ->set('reservation_id', $reservation->id)
        ->set('invoice_number', 'FAC-001')
        ->set('total', 100)
        ->set('status', 'invalid')
        ->set('issued_at', '2026-02-04')
        ->call('save')
        ->assertHasErrors(['status']);
});

/*
|--------------------------------------------------------------------------
| Reset Form
|--------------------------------------------------------------------------
*/

it('form resets after save', function () {
    $reservation = Reservation::factory()->create();

    Livewire::actingAs($this->admin)
        ->test(InvoicesCrud::class)
        ->set('reservation_id', $reservation->id)
        ->set('invoice_number', 'FAC-001')
        ->set('total', 150.00)
        ->set('status', 'unpaid')
        ->set('issued_at', '2026-02-04')
        ->call('save')
        ->assertSet('invoice_number', null)
        ->assertSet('total', null)
        ->assertSet('isEdit', false);
});
