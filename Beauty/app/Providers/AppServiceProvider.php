<?php

namespace App\Providers;

use App\Observers\GroupObserver;
use Illuminate\Support\ServiceProvider;
use App\Group;

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
        Group::observe(GroupObserver::class);
    }
}
