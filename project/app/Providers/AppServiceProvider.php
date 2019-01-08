<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;


// Added by me
use Illuminate\Support\Facades\Schema;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        // Added by me
        Schema::defaultStringLength(191);
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind(
            \App\Repositories\UserRepository::class,
            \App\Repositories\DbUserRepository::class
        );
    }
}
