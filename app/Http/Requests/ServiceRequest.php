<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'base_price' => 'required|numeric|min:0',
            'duration_minutes' => 'required|integer|min:5',
            'active' => 'boolean',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
