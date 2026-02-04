<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\InvoiceRequest;
use App\Models\Invoice;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use PhpParser\Token;

class invoicesAPICrud extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        $token = request()->bearerToken();

        if ($token) {
            $accessToken = \Laravel\Sanctum\PersonalAccessToken::findToken($token);
            if ($accessToken) {
                auth()->setUser($accessToken->tokenable);
            }
        }
    }

    public function index()
    {
        $this->authorize('view', Invoice::class);

        return response()->json([
            'invoices' => Invoice::paginate(10)
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

        return response()->json($invoice);
    }

    public function update(InvoiceRequest $request, Invoice $invoice)
    {
        $this->authorize('update', $invoice);

        $invoice->update($request->validated());
        return response()->json($invoice);
    }

    public function destroy(Invoice $invoice)
    {
        $this->authorize('delete', $invoice);

        $invoice->delete();
        return response()->json(null, 204);
    }
}
