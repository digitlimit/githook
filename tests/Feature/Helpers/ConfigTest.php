<?php

use Digitlimit\Githook\Helpers\Config;
use Digitlimit\Githook\Http\Middleware\VerifySignatureMiddleware;
use Illuminate\Support\Facades\Config as LaravelConfig;

it('returns the webhook secret', function () {
    $secret = Config::secret();
    expect($secret)->toBe('secret');
});

it('returns the event class for a given event', function () {
    $pushEventClass = Config::eventClass('push');
    $pullRequestEventClass = Config::eventClass('pull_request');
    $nonExistentEventClass = Config::eventClass('non_existent_event');

    expect($pushEventClass)
        ->toBe(Digitlimit\Githook\Events\Push::class)
        ->and($pullRequestEventClass)
        ->toBe(Digitlimit\Githook\Events\PullRequest::class)
        ->and($nonExistentEventClass)
        ->toBeNull();
});

it('checks if debugging is enabled', function () {
    LaravelConfig::set('githook.debug', true);
    $isDebugging = Config::isDebugging();
    expect($isDebugging)->toBeTrue();
});

it('returns the middleware', function () {
    $middleware = Config::middleware();
    expect($middleware)->toBe(VerifySignatureMiddleware::class);
});

it('returns the controller', function () {
    $controller = Config::controller();
    expect($controller)->toBe(Digitlimit\Githook\Http\Controllers\GithookController::class);
});

it('returns the url', function () {
    $url = Config::url();
    expect($url)->toBe('/githook');
});
