<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\Twitter;


/*
------------------------------------------------------

		Sedvice Provider is a class that bootstraps a particular feature
		or component of the Laravel Framework

------------------------------------------------------
*/

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Twitter::class, function(){
            return new Twitter(config('services.twitter.secret'));
        });
    }
}
