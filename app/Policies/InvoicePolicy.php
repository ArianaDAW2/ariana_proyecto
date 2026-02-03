<?php

namespace App\Policies;

use App\Models\Invoice;
use App\Models\User;

class InvoicePolicy
{
    public function view(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_payments') ?? false;
    }

    public function create(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_payments') ?? false;
    }

    public function update(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_payments') ?? false;
    }

    public function delete(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_payments') ?? false;
    }
    
}
