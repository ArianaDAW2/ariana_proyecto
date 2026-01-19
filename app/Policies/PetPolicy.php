<?php

namespace App\Policies;

use App\Models\Pet;
use App\Models\User;

class PetPolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('manage_users');
    }

    public function view(User $user, Pet $pet): bool
    {
        return $pet->user_id === $user->id;//Para que el usuario pueda ver sus pets
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
