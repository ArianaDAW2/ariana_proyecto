<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalRecordRequest extends FormRequest
{
    public function rules(): array
    {
        return [
            'pet_id' => 'required|exists:pets,id',
            'diagnosis' => 'required|string|min:10',
            'notes' => 'nullable|string',
        ];
    }

    public function authorize(): bool
    {
        return true;
    }
}
