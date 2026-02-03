<?php

namespace App\Policies;

use App\Models\User;

class ServicePolicy
{
    public function view(?User $user): bool
    {
        return true;
    }

    public function create(?User $user): bool
    {

        return $user?->hasPermissionTo('manage_services') ?? false;

    }

    public function update(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_services') ?? false;
    }

    public function delete(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_services') ?? false;
    }

}
