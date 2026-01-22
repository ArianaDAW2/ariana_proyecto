<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;

class DashboardController extends Controller
{
    public function dashboard()
    {
        return view('dashboard');
    }

    public function my_reservations()
    {
        return view('client.my_reservations');
    }

}
