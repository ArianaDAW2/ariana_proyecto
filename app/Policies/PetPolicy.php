<?php

namespace App\Policies;

use App\Models\Pet;
use App\Models\User;

class PetPolicy
{
    public function view(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_users') ?? false;
    }

    public function create(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_users') ?? false;
    }

    public function update(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_users') ?? false;
    }

    public function delete(User $user): bool
    {
        return $user?->hasPermissionTo('manage_users') ?? false;
    }

}
