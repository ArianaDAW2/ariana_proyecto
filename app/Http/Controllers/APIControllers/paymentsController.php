<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Models\Payment;

class paymentsController extends Controller
{
    public function payment()
    {
        return response()->json(
            Payment::select(
                'id',
                'amount',
                'payment_method',
                'paid_at'
            )->get());
    }


}
