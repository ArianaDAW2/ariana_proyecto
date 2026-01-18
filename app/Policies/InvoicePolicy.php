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

    public function view(User $user, Invoice $invoice): bool
    {
        return $user->hasPermissionTo('manage_payments')
            || $invoice->user_id === $user->id; //para que el usuario pueda ver sus facturas
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

    public function restore(User $user, Invoice $invoice): bool
    {
        return $user->hasPermissionTo('manage_payments');
    }

    public function forceDelete(User $user, Invoice $invoice): bool
    {
        return $user->hasPermissionTo('manage_payments');
    }
}
