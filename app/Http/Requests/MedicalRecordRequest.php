<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MedicalRecordRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'pet_id' => ['required', 'exists:pets,id'],
            'veterinarian_id' => ['required', 'exists:users,id'],
            'diagnosis' => ['required', 'string'],
            'treatment' => ['nullable', 'string'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
