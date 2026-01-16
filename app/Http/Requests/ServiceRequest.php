<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize(User $user): bool
    {
        return $user->hasPermissionTo('manage_services');
    }

    public function rules(): array
    {
        return [
            'name' => 'required|string|max:100',
            'base_price' => 'required|numeric|min:0',
            'duration_minutes' => 'required|integer|min:5',
            'active' => 'boolean',
        ];
    }

}
