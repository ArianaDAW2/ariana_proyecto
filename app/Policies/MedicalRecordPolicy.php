<?php

namespace App\Policies;

use App\Models\MedicalRecord;
use App\Models\User;

class MedicalRecordPolicy
{
    public function view(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_medical_records') ?? false;

    }

    public function create(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_medical_records') ?? false;
    }

    public function update(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_medical_records') ?? false;
    }

    public function delete(?User $user): bool
    {
        return $user?->hasPermissionTo('manage_medical_records') ?? false;
    }

    /*softdeletes SIN HACER
        public function restore(User $user): bool
        {
            return $user->hasPermissionTo('manage_medical_records');
        }

        public function forceDelete(User $user): bool
        {
            return $user->hasPermissionTo('manage_medical_records');
        }
    */
}
