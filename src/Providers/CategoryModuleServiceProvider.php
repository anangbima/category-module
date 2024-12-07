<?php

namespace Razen\CategoryModule\Providers;

use Illuminate\Support\ServiceProvider;

class CategoryModuleServiceProvider extends ServiceProvider
{
    /**
     * Register the module's services.
     */
    public function register()
    {
        // Registrasi layanan jika perlu
    }

    /**
     * Bootstrap the module's services.
     */
    public function boot()
    {
        // Memuat migrasi dari folder module
        $this->loadMigrationsFrom(__DIR__.'/../Migrations');
    }
}
