<?php

namespace App\Providers;

use Illuminate\Foundation\DevCommands;
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
        // "composer run dev" también recompila Angular (frontend/) cada vez que se guarda un archivo
        DevCommands::register('npm --prefix ../frontend run watch', 'angular');
    }
}
