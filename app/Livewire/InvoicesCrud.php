<?php

namespace App\Livewire;

use App\Models\Invoice;
use App\Models\Reservation;
use Illuminate\Http\Request;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use App\Http\Requests\InvoiceRequest;

class InvoicesCrud extends Component
{
    use WithPagination;
    use AuthorizesRequests;

    public $invoiceId;
    public $reservation_id;
    public $invoice_number;
    public $total;
    public $status = 'unpaid';
    public $issued_at;

    public $isEdit = false;

    protected function rules()
    {
        return (new InvoiceRequest())->rules($this->invoiceId);
    }

    public function render(Request $request)
    {
        $this->authorize('view', Invoice::class);

        return view('livewire.invoices-crud', [
            'invoices' => Invoice::with('reservation')->paginate(10),
            'reservations' => Reservation::all(),
        ]);

    }

    public function save()
    {
        $this->authorize('create', Invoice::class);

        $validated = $this->validate();

        Invoice::create($validated);

        $this->resetForm();
    }

    public function edit(Invoice $invoice)
    {
        $this->authorize('update', $invoice);

        $this->invoiceId = $invoice->id;
        $this->reservation_id = $invoice->reservation_id;
        $this->invoice_number = $invoice->invoice_number;
        $this->total = $invoice->total;
        $this->status = $invoice->status;
        $this->issued_at = $invoice->issued_at;
        $this->isEdit = true;
    }

    public function update()
    {
        $invoice = Invoice::findOrFail($this->invoiceId);
        $this->authorize('update', $invoice);

        $validated = $this->validate();

        $invoice->update($validated);

        $this->resetForm();
    }

    public function delete(Invoice $invoice)
    {
        $this->authorize('delete', $invoice);

        $invoice->delete();
    }

    private function resetForm()
    {
        $this->reset([
            'invoiceId',
            'reservation_id',
            'invoice_number',
            'total',
            'status',
            'issued_at',
            'isEdit'
        ]);
    }
}
