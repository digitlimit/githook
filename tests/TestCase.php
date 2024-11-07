<?php

namespace Digitlimit\Githook\Tests;

use Digitlimit\Githook\GithookServiceProvider;
use Illuminate\Contracts\Config\Repository;
use Illuminate\Foundation\Application;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Illuminate\Support\Facades\Facade;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use InteractsWithViews;

    /**
     * Define environment setup.
     *
     * @param  Application  $app
     */
    protected function defineEnvironment($app): void
    {
        // Setup default database to use sqlite :memory:
        tap($app['config'], function (Repository $config) {
            $config->set('services.slack', [
                'notifications' => [
                    'bot_user_oauth_token' => env('SLACK_BOT_USER_OAUTH_TOKEN'),
                    'channel' => env('SLACK_BOT_USER_DEFAULT_CHANNEL'),
                ],
            ]);
        });
    }

    protected function getPackageProviders($app): array
    {
        return [
            GithookServiceProvider::class,
        ];
    }

    /**
     * Override application aliases.
     *
     * @param  Application  $app
     * @return array<string, class-string<Facade>>
     */
    protected function getPackageAliases($app): array
    {
        return [

        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }

    public function packagePath(string $path = ''): string
    {
        return __DIR__.'/../'.$path;
    }
}
