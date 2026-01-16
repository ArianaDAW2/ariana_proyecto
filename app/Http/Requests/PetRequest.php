<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class PetRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(User $user): bool
    {
        return $user->hasPermissionTo('manage_users');
    }
    
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'species' => 'required|string|max:50',
            'breed' => 'nullable|string|max:100',
            'weight' => 'required|numeric|min:0.1|max:100',
            'birth_date' => 'nullable|date',
            'notes' => 'nullable|string|max:1000',
        ];
    }
}
