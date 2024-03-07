<?php

namespace App\Providers;

use App\Models\user;
use App\Observers\UserObserver;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider {
    /**
     * Register any application services.
     */

    public function register(): void {
        //
    }

    /**
     * Bootstrap any application services.
     */

    public function boot() {
        User::observe(UserObserver::class);
    }
}