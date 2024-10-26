<?php

namespace Digitlimit\Githook;

use Digitlimit\Githook\Http\Controllers\GithookController;
use Digitlimit\Githook\Providers\EventServiceProvider;
use Illuminate\Support\ServiceProvider;

class GithookServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/../resources/views', 'githook');
        $this->loadRoutesFrom(__DIR__.'/../routes/web.php');

        if ($this->app->runningInConsole()) {
            $this->bootForConsole();
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        $this->app->register(EventServiceProvider::class);
        $this->app->make(GithookController::class);

        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'githook');
    }

    /**
     * Console-specific booting.
     */
    protected function bootForConsole(): void
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('githook.php'),
        ], 'config');

        $this->publishes([
            __DIR__.'/../resources/views' => resource_path('views/vendor/githook'),
        ], 'views');
    }
}
