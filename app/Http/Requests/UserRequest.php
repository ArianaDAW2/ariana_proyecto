<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class UserRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules($userId = null): array
    {
        return [
            'name' => [
                'required',
                'string',
                'max:50'],
            'email' => [
                'required',
                'email',
                'max:100',
                'unique:users,email,' . $userId,
            ],
            'password' => [
                $userId ? 'nullable' : 'required',
                'min:8',
            ],
        ];
    }


}
