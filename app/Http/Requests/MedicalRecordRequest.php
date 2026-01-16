<?php

namespace App\Http\Requests;

use App\Models\User;
use Illuminate\Foundation\Http\FormRequest;

class MedicalRecordRequest extends FormRequest
{
    public function authorize(User $user): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }

    public function rules(): array
    {

        return [
            'pet_id' => 'required|exists:pets,id',
            'diagnosis' => 'required|string|min:10',
            'notes' => 'nullable|string',
        ];
    }


}
