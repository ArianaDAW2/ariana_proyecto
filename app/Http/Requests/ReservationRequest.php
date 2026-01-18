<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ReservationRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules($reservationId = null): array
    {
        return [
            'user_id' => ['required', 'exists:users,id'],
            'pet_id' => ['required', 'exists:pets,id'],
            'start_date' => ['required', 'date', 'before_or_equal:end_date'],
            'end_date' => ['required', 'date', 'after_or_equal:start_date'],
            'status' => ['required', 'in:pending,confirmed,completed,cancelled'],
            'total_price' => ['required', 'numeric', 'min:0'],
        ];
    }
}
