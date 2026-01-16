<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class InvoiceRequest extends FormRequest
{
    public function authorize(User $user): bool
    {
        return $user->hasPermissionTo('manage_payments');
    }

    public function rules(): array
    {
        return [
            'status' => 'required|string|max:100',
        ];
    }


}
