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

    public function update(?User $user, Invoice $invoice): bool
    {
        return $user?->hasPermissionTo('manage_payments') ?? false;
    }

    public function delete(?User $user, Invoice $invoice): bool
    {
        return $user?->hasPermissionTo('manage_payments') ?? false;
    }

    /*softdeletes SIN HACER
        public function restore(User $user, Invoice $invoice): bool
        {
            return $user->hasPermissionTo('manage_payments');
        }

        public function forceDelete(User $user, Invoice $invoice): bool
        {
            return $user->hasPermissionTo('manage_payments');
        }
    */
}
