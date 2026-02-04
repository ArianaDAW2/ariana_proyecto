// tests/Feature/Http/DocumentsControllerTest.php

<?php

use App\Models\User;
use App\Models\Invoice;
use App\Models\Reservation;
use Database\Seeders\RolePermissionUserSeeder;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Event;
use App\Events\ContactFormEvent;
use App\Events\AdminMessageEvent;
use App\Jobs\GeneratePetContractJob;
use Illuminate\Support\Facades\Queue;

beforeEach(function () {
    $this->seed(RolePermissionUserSeeder::class);

    $this->admin = User::factory()->create();
    $this->admin->assignRole('Admin');

    $this->cliente = User::factory()->create();
    $this->cliente->assignRole('Cliente');
});

/*
|--------------------------------------------------------------------------
| Contact (Público)
|--------------------------------------------------------------------------
*/

it('guest can access contact page', function () {
    $this->get('/document/contact')
        ->assertStatus(200);
});

it('guest can send contact form', function () {
    Event::fake();

    $this->post('/document/contact-send', [
        'title' => 'Consulta',
        'email' => 'test@mail.com',
        'message' => 'Tengo una duda',
    ])->assertRedirect();

    Event::assertDispatched(ContactFormEvent::class);
});

it('contact form validates required fields', function () {
    $this->post('/document/contact-send', [])
        ->assertSessionHasErrors(['title', 'email', 'message']);
});

/*
|--------------------------------------------------------------------------
| Admin Message
|--------------------------------------------------------------------------
*/

it('guest cannot access admin message page', function () {
    $this->get('/document/admin/extra/create')
        ->assertRedirect('/login');
});

it('cliente cannot access admin message page', function () {
    $this->actingAs($this->cliente)
        ->get('/document/admin/extra/create')
        ->assertStatus(403);
});

it('admin can access admin message page', function () {
    $this->actingAs($this->admin)
        ->get('/document/admin/extra/create')
        ->assertStatus(200);
});

it('admin can send admin message', function () {
    Event::fake();

    $this->actingAs($this->admin)
        ->post('/document/admin/extra/send', [
            'title' => 'Aviso importante',
            'message' => 'Este es un mensaje para todos',
        ])->assertRedirect();

    Event::assertDispatched(AdminMessageEvent::class);
});

it('admin message validates required fields', function () {
    $this->actingAs($this->admin)
        ->post('/document/admin/extra/send', [])
        ->assertSessionHasErrors(['title', 'message']);
});

/*
|--------------------------------------------------------------------------
| Print Invoices (PDF)
|--------------------------------------------------------------------------
*/

it('guest cannot print invoices', function () {
    $this->get('/document/pdf/invoices')
        ->assertRedirect('/login');
});

it('cliente cannot print invoices', function () {
    $this->actingAs($this->cliente)
        ->get('/document/pdf/invoices')
        ->assertStatus(403);
});

it('admin can print invoices pdf', function () {
    Invoice::factory()->count(2)->create();

    $this->actingAs($this->admin)
        ->get('/document/pdf/invoices')
        ->assertStatus(200)
        ->assertHeader('content-type', 'application/pdf');
});

/*
|--------------------------------------------------------------------------
| Print Morosos (PDF)
|--------------------------------------------------------------------------
*/

it('guest cannot print morosos', function () {
    $this->get('/document/admin/morosos')
        ->assertRedirect('/login');
});

it('cliente cannot print morosos', function () {
    $this->actingAs($this->cliente)
        ->get('/document/admin/morosos')
        ->assertStatus(403);
});

it('admin can print morosos pdf', function () {
    Invoice::factory()->create(['status' => 'unpaid']);

    $this->actingAs($this->admin)
        ->get('/document/admin/morosos')
        ->assertStatus(200)
        ->assertHeader('content-type', 'application/pdf');
});

/*
|--------------------------------------------------------------------------
| Contracts
|--------------------------------------------------------------------------
*/

it('guest cannot access contracts', function () {
    $this->get('/document/admin/contracts')
        ->assertRedirect('/login');
});

it('cliente cannot access contracts', function () {
    $this->actingAs($this->cliente)
        ->get('/document/admin/contracts')
        ->assertStatus(403);
});

it('admin can generate contracts', function () {
    Queue::fake();

    Reservation::factory()->count(2)->create();

    $this->actingAs($this->admin)
        ->get('/document/admin/contracts')
        ->assertRedirect();

    Queue::assertPushed(GeneratePetContractJob::class, 2);
});

it('admin can download contract', function () {
    Storage::fake();
    Storage::put('contracts/test-contract.pdf', 'fake pdf content');

    $this->actingAs($this->admin)
        ->get('/document/admin/contracts/test-contract.pdf')
        ->assertStatus(200);
});
