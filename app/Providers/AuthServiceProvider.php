<?php

namespace App\Providers;

use App\Models\{
    Pet,
    Reservation,
    MedicalRecord,
    User,
    Invoice
};
use App\Policies\{
    PetPolicy,
    ReservationPolicy,
    MedicalRecordPolicy,
    UserPolicy,
    InvoicePolicy
};
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Pet::class => PetPolicy::class,
        Reservation::class => ReservationPolicy::class,
        MedicalRecord::class => MedicalRecordPolicy::class,
        User::class => UserPolicy::class,
        Invoice::class => InvoicePolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();

        // 🔥 Admin = acceso total
        Gate::before(function ($user) {
            return $user->hasPermissionTo('manage_users') ? true : null;
        });
    }
}
