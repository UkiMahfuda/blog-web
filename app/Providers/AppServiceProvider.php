<?php

namespace App\Providers;

use App\Models\User;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\Gate;
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
    public function boot()
    {
        Paginator::useBootstrapFour();

        //membuat gate
        // Gate::define('isAdmin', function (User $user) {
        //     return $user->username === 'mahfuda';
        // });
        Gate::define('isAdmin', function (User $user) {
            return $user->is_admin;
        });
    }
}
