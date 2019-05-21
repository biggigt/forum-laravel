<?php

namespace App\Providers;

use App\Channel;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        try {

            $channels = Channel::all();

        } catch (\Exception $e) {

            $channels = [];
        }

        \View::share('channels', $channels);
    }
}
