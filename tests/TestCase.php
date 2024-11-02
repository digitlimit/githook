<?php

namespace Digitlimit\Githook\Tests;

use Digitlimit\Githook\GithookServiceProvider;
use Illuminate\Foundation\Testing\Concerns\InteractsWithViews;
use Orchestra\Testbench\TestCase as BaseTestCase;

class TestCase extends BaseTestCase
{
    use InteractsWithViews;

    protected function getPackageProviders($app)
    {
        return [
            GithookServiceProvider::class,
        ];
    }

    /**
     * Override application aliases.
     *
     * @param \Illuminate\Foundation\Application $app
     *
     * @return array<string, class-string<\Illuminate\Support\Facades\Facade>>
     */
    protected function getPackageAliases($app)
    {
        return [

        ];
    }

    protected function getEnvironmentSetUp($app)
    {
        // perform environment setup
    }

    public function packagePath(string $path = '')
    {
        return __DIR__ . '/../' . $path;
    }
}
