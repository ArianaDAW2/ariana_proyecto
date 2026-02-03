<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function view(?User $user): bool
    {

        return $user?->hasPermissionTo('manage_users') ?? false;
    }

    public function create(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_users') ?? false;
    }

    public function update(?User $user, User $model): bool
    {
        return $user?->hasPermissionTo('manage_users') ?? false;
    }

    public function delete(?User $user, User $model): bool
    {
        return $user?->hasPermissionTo('manage_users') ?? false;
    }

}
