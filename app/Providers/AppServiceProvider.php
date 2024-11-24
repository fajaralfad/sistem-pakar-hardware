<?php

namespace App\Providers;

use Filament\Widgets\FilamentInfoWidget;
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
        // Menghapus FilamentInfoWidget yang berisi Documentation dan GitHub
        \Filament\Facades\Filament::serving(function () {
            // Menghapus widget FilamentInfoWidget
            \Filament\Facades\Filament::registerWidgets([]);
        });
    }
}
