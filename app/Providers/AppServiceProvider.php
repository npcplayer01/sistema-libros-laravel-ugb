<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\URL; // <--- 1. IMPORTANTE: Agrega esta línea

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // 2. Agregamos esto para que en Producción use HTTPS
        if (config('app.env') === 'production') {
            URL::forceScheme('https');
        }
    }
}