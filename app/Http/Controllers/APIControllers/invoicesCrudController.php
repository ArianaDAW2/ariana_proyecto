<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceRequest;
use App\Models\Invoice;
use App\Models\Reservation;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class invoicesCrudController extends Controller
{
    use AuthorizesRequests;

    public function index()
    {
        $this->authorize('view', invoice::class);

        return response()->json([
            'invoices' => Invoice::with('reservation')->paginate(10),
            'reservations' => Reservation::all(),
        ]);
    }

    public function store(InvoiceRequest $request)
    {
        $this->authorize('create', Invoice::class);
        $invoice = Invoice::create($request->validated());
        return response()->json($invoice, 201);
    }

    public function show(Invoice $invoice)
    {
        $this->authorize('view', $invoice);
        return response()->json($invoice->load('reservation'));
    }

    public function update(InvoiceRequest $request, Invoice $invoice)
    {
        $this->authorize('update', $invoice);
        $invoice->update($request->validated());
        return response()->json($invoice->load('reservation'));
    }

    public function destroy(Invoice $invoice)
    {
        $this->authorize('delete', $invoice);
        $invoice->delete();
        return response()->json(null, 204);
    }
}
