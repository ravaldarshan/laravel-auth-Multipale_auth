<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\Blade;

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
        Schema::defaultStringLength(191);

      // custome auth direction
        Blade::if('admin', function () {
                return Auth::guard('admin')->check();
            });
        Blade::if('user', function () {
                return Auth::guard('web')->check();
            });
    }
}
