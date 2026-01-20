<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;
use App\Models\User;

class paymentsController extends Controller
{
    public function payment(User $user)
    {
        if (!$user->hasPermissionTo('manage_payments')) {
            return response()->json(['error' => 'You are not authorized to perform this action.'], 403);
        };
        return response()->json(
            Payment::select(
                'id',
                'amount',
                'payment_method',
                'paid_at'
            )->get());
    }


}
