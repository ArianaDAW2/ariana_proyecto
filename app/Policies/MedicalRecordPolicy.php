<?php

namespace App\Policies;

use App\Models\MedicalRecord;
use App\Models\User;
use Illuminate\Auth\Access\Response;

class MedicalRecordPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, MedicalRecord $record): bool
    {
        return $user->hasPermissionTo('manage_medical_records')
            || $record->pet->user_id === $user->id;
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, MedicalRecord $record): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, MedicalRecord $record): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, MedicalRecord $medicalRecord): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, MedicalRecord $medicalRecord): bool
    {
        return $user->hasPermissionTo('manage_medical_records');
    }
}
