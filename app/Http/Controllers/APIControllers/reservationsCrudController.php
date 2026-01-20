<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Pet;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class reservationsCrudController extends Controller
{
    public function index()
    {
        $this->authorize('view', Reservation::class);

        $reservations = Reservation::with(['user', 'pet', 'services'])->paginate(10);
        $users = User::all();

        return response()->json([
            'reservations' => $reservations,
            'users' => $users,
            'pets' => Pet::all(),
            'services' => Service::all(),
        ]);
    }

    public function store(ReservationRequest $request)
    {
        $this->authorize('create', Reservation::class);
        $reservation = Reservation::create($request->validated());
        return response()->json($reservation, 201);
    }

    public function show(Reservation $reservation)
    {
        $this->authorize('view', $reservation);
        return response()->json($reservation->load('user', 'pet', 'services'));
    }

    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $this->authorize('update', $reservation);
        $reservation->update($request->validated());
        return response()->json($reservation->load('user', 'pet', 'services'));
    }

    public function destroy(Reservation $reservation)
    {
        $this->authorize('delete', $reservation);
        $reservation->delete();
        return response()->json(null, 204);
    }

}
