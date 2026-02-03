<?php

namespace App\Policies;

use App\Models\Reservation;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class ReservationPolicy
{

    public function view(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_reservations') ?? false;
    }

    public function create(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_reservations') ?? false;
    }

    public function update(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_reservations') ?? false;
    }

    public function delete(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_reservations') ?? false;
    }

}
