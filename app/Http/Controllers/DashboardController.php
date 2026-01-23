<?php

namespace App\Http\Controllers;

use App\Models\Pet;
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
        $reservations = Reservation::with(['user', 'pet', 'services'])
            ->forUser()
            ->paginate(10);

        return view('client.my_reservations', [
            'reservations' => $reservations,
            'pets' => Pet::all(),
            'services' => Service::all(),
        ]);
    }

    public function top_buyers()
    {
        return view('client.top_buyers', [
            'users' => User::topBuyers()->paginate(20)
        ]);
    }

    public function top_services()
    {
        return view('client.top_services', [
            'services' => Service::topServices()->paginate(10)
        ]);
    }
}
