<?php

namespace App\Policies;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ReservationPolicy
{

    public function view(User $user): bool
    {
        return $user->hasPermissionTo('manage_reservations');
    }
    
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('manage_reservations');
    }

    public function update(User $user, Reservation $reservation): bool
    {
        return $user->hasPermissionTo('manage_reservations');
    }

    public function delete(User $user, Reservation $reservation): bool
    {
        return $user->hasPermissionTo('manage_users');
    }

//softdeletes SIN HACER
    public function restore(User $user, Reservation $reservation): bool
    {
        return $user->hasPermissionTo('manage_reservations');
    }

    public function forceDelete(User $user, Reservation $reservation): bool
    {
        return $user->hasPermissionTo('manage_reservations');
    }
}
