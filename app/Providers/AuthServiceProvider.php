<?php

namespace App\Providers;

use Illuminate\Auth\Access\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        'App\Models\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        $this->registerPolicies();
        // use of gate //
        Gate::define('admin', function ($user) {
            // dd(Auth::guard('admin')->check());
            // return Auth::guard('admin')->check();
            return $user->is_admin == 1;
        });
        Gate::define('user', function ($user) {
            // dd($user->is_admin == 0);
            return $user->is_admin == 0;
        });
    }
}
