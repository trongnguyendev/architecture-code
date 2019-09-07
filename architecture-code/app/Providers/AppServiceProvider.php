<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// use App\Repositories\Notify;
// use App\Repositories\LaravelMailer;

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
        // $this->app->singleton('Notify', function ($app) {
        //     return new LaravelMailer();
        // });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
