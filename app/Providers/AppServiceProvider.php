<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

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
        // en caso se este trabajando con bootstrap 5 teien que habilitar esta linea
        //caso contraio dejar comentada y trabajaras con tailwind por defecto de laravel

        // Paginator::useBootstrapFive();
    }
}
