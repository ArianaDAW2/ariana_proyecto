<?php

namespace App\Providers;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function register(): void
    {

    }

    public function boot(): void
    {
        // API v1
        Route::middleware('api')
            ->prefix('api/v1')
            ->group(base_path('routes/api/v1.php'));

        // Web pública
        Route::middleware('web')
            ->group(base_path('routes/web/public.php'));

        // Web privada (usuarios autenticados)
        Route::middleware(['web', 'auth', 'verified'])
            ->group(base_path('routes/web/dashboard.php'));

        // Administración
        Route::middleware(['web', 'auth', 'verified', 'role:Admin'])
            ->prefix('admin')
            ->name('admin.')
            ->group(base_path('routes/web/admin.php'));
    }
}
