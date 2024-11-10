<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        // Job Type Constants
        defined('FULL_TIME') or define('FULL_TIME',1);
        defined('PART_TIME') or define('PART_TIME',2);
        defined('CONTRACT_BASED') or define('CONTRACT_BASED',3);
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
