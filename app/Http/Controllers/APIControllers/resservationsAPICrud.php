<?php

namespace App\Http\Controllers\APIControllers;

use App\Http\Controllers\Controller;
use App\Http\Requests\ReservationRequest;
use App\Models\Pet;
use App\Models\Reservation;
use App\Models\Service;
use App\Models\User;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;


class resservationsAPICrud extends Controller
{
    use AuthorizesRequests;

    public function __construct()
    {
        $token = request()->bearerToken();

        if ($token) {
            $accessToken = \Laravel\Sanctum\PersonalAccessToken::findToken($token);
            if ($accessToken) {
                auth()->setUser($accessToken->tokenable);
            }
        }
    }

    public function index()
    {
        $this->authorize('view', Reservation::class);

        $reservations = Reservation::paginate(10);

        return response()->json([
            'reservations' => $reservations,
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

        return response()->json($reservation);
    }

    public function update(ReservationRequest $request, Reservation $reservation)
    {
        $this->authorize('update', $reservation);

        $reservation->update($request->validated());
        return response()->json($reservation);
    }

    public function destroy(Reservation $reservation)
    {
        $this->authorize('delete', $reservation);
        
        $reservation->delete();
        return response()->json(null, 204);
    }

}
