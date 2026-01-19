<?php

namespace App\Policies;

use App\Models\Invoice;
use App\Models\User;

class InvoicePolicy
{
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('manage_payments');
    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('manage_payments');
    }

    public function update(User $user, Invoice $invoice): bool
    {
        return $user->hasPermissionTo('manage_payments');
    }

    public function delete(User $user, Invoice $invoice): bool
    {
        return $user->hasPermissionTo('manage_payments');
    }

//softdeletes SIN HACER
    public function restore(User $user, Invoice $invoice): bool
    {
        return $user->hasPermissionTo('manage_payments');
    }

    public function forceDelete(User $user, Invoice $invoice): bool
    {
        return $user->hasPermissionTo('manage_payments');
    }
}
