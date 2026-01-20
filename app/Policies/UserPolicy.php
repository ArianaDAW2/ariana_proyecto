<?php

namespace App\Policies;

use App\Models\User;

class UserPolicy
{
    public function view(User $user): bool
    {
        return $user->hasPermissionTo('manage_users');
    }
    
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('manage_users');
    }

    public function update(User $user, User $model): bool
    {
        return $user->hasPermissionTo('manage_users')
            || $user->id === $model->id;
    }

    public function delete(User $user, User $model): bool
    {
        return $user->hasPermissionTo('manage_users');
    }

//Softdeletes Sin terminar
    public function restore(User $user, User $model): bool
    {
        return $user->hasPermissionTo('manage_users');
    }

    public function forceDelete(User $user, User $model): bool
    {
        return $user->hasPermissionTo('manage_users');
    }
}
