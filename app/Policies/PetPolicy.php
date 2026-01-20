<?php

namespace App\Policies;

use App\Models\Pet;
use App\Models\User;

class PetPolicy
{
    public function view(User $user): bool
    {
        return $user->hasPermissionTo('manage_users');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('manage_users');
    }

    public function update(User $user, Pet $pet): bool
    {
        return $user->hasPermissionTo('manage_users');
    }

    public function delete(User $user, Pet $pet): bool
    {
        return $user->hasPermissionTo('manage_users');
    }

//softdeletes SIN HACER
    public function restore(User $user, Pet $pet): bool
    {
        return $user->hasPermissionTo('manage_users');
    }

    public function forceDelete(User $user, Pet $pet): bool
    {
        return $user->hasPermissionTo('manage_users');
    }
}
