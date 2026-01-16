<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function rules(): array
    {
        return [

        ];
    }

    public function authorize(User $user): bool
    {
        return $user->hasPermissionTo('manage_users');
    }
}
