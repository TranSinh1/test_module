<?php

namespace App\Modules;

use Illuminate\Support\ServiceProvider;
use File;

class TestServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/Category/Routes/routes.php');
        $this->loadViewsFrom(__DIR__.'/Category/Views', 'Category');
    }
}
