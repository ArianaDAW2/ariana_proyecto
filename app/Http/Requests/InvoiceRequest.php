<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules($invoiceId = null): array
    {
        return [
            'reservation_id' => ['required', 'exists:reservations,id'],
            'invoice_number' => ['required', 'string'],
            'total' => ['required', 'numeric', 'min:0'],
            'status' => ['required', 'in:paid,unpaid'],
            'issued_at' => ['required', 'date'],
        ];
    }
}
