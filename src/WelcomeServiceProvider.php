<?php

namespace Dovemad\Welcome;

use Illuminate\Support\ServiceProvider;

class WelcomeServiceProvider extends ServiceProvider
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
        //    dd('hello everyone!');
        include __DIR__ . '/../routes/welcome.php';
        $this->loadViewsFrom(__DIR__ .'/../resources/views', 'dovemadwelcome');
    }
}
