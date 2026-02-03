<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules($petId = null): array
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'name' => ['required', 'string', 'max:50'],
            'species' => ['required', 'string', 'max:50'],
            'breed' => ['nullable', 'string', 'max:50'],
            'age' => ['required', 'integer', 'min:0'],
            'weight' => ['required', 'numeric', 'min:0'],
            'notes' => ['nullable', 'string'],
        ];
    }
}
