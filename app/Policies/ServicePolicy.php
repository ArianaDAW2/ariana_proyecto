<?php

namespace App\Policies;

use App\Models\Service;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ServicePolicy
{
    public function viewAny(): bool
    {
        return true;
    }

    public function view(): bool
    {
        return true;

    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('manage_services');

    }

    public function update(User $user): bool
    {
        return $user->hasPermissionTo('manage_services');
    }

    public function delete(User $user): bool
    {
        return $user->hasPermissionTo('manage_services');
    }

    public function restore(User $user): bool
    {
        return $user->hasPermissionTo('manage_services');
    }

    public function forceDelete(User $user): bool
    {
        return $user->hasPermissionTo('manage_services');
    }
}
