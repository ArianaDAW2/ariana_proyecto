<?php

namespace App\Providers;


use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;

class RouteServiceProvider extends ServiceProvider
{
    public function register(): void
    {
        //
    }

    public function boot(): void
    {
        // API
        Route::middleware(['api', 'auth:sanctum'])
            ->prefix('api')
            ->group(base_path('routes/api.php'));

        // Web pública
        Route::middleware('web')
            ->prefix('public')
            ->name('public.')
            ->group(base_path('routes/web/public.php'));
        // Emails - PDF
        Route::middleware('web')
            ->prefix('document')
            ->name('document.')
            ->group(base_path('routes/web/documents.php'));

        // Web privada !-> Redirige al login
        Route::middleware(['web', 'auth', 'verified'])
            ->prefix('client')
            ->name('client.')
            ->group(base_path('routes/web/dashboard.php'));

        // Administración
        Route::middleware(['web', 'auth', 'verified', 'can:access_worker'])
            ->prefix('admin')
            ->name('admin.')
            ->group(base_path('routes/web/admin.php'));
    }
}
