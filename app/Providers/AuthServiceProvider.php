<?php

namespace App\Providers;

use App\Models\{
    Pet,
    Reservation,
    MedicalRecord,
    User,
    Invoice,
    Service
};
use App\Policies\{
    PetPolicy,
    ReservationPolicy,
    MedicalRecordPolicy,
    UserPolicy,
    InvoicePolicy,
    ServicePolicy
};
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    protected $policies = [
        Pet::class => PetPolicy::class,
        Reservation::class => ReservationPolicy::class,
        MedicalRecord::class => MedicalRecordPolicy::class,
        Service::class => ServicePolicy::class,
        User::class => UserPolicy::class,
        Invoice::class => InvoicePolicy::class,
    ];

    public function boot(): void
    {
        $this->registerPolicies();

    }
}
