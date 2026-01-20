<?php

namespace App\Policies;

use App\Models\MedicalRecord;
use App\Models\User;

class MedicalRecordPolicy
{
    public function view(User $user, MedicalRecord $record): bool
    {
        return $user->hasPermissionTo('manage_medical_records');

    }

    public function create(User $user): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }

    public function update(User $user, MedicalRecord $record): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }

    public function delete(User $user, MedicalRecord $record): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }

//softdeletes SIN HACER
    public function restore(User $user, MedicalRecord $medicalRecord): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }

    public function forceDelete(User $user, MedicalRecord $medicalRecord): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }
}
