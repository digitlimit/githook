<?php

namespace Digitlimit\Githook;

use Digitlimit\Githook\Providers\EventServiceProvider;
use Illuminate\Support\ServiceProvider;

class GithookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__ . '/../resources/views', 'githook');
        $this->loadRoutesFrom(__DIR__ . '/../routes/web.php');
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(EventServiceProvider::class);

        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'githook');

        $this->app->singleton('githook', function () {
            return new Githook;
        });
    }
}