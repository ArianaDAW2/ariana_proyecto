<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\MedicalRecordRequest;
use App\Models\MedicalRecord;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class medicalRecordsCrudController extends Controller
{
    public function index()
    {

    }

    public function store(medicalRecordRequest $request)
    {
        $this->authorize('create', medicalRecord::class);
        $invoice = medicalRecordsCrudController::create($request->validated());
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
