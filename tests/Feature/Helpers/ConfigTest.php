<?php

use Digitlimit\Githook\Helpers\Config;
use Illuminate\Support\Facades\Config as ConfigFacade;

//beforeEach(function () {
//    // Mock the config function
//    ConfigFacade::shouldReceive('get')->with('githook.secret')->andReturn('test-secret');
//    ConfigFacade::shouldReceive('get')->with('githook.events')->andReturn([
//        'push' => ['event' => 'App\Events\PushEvent'],
//        'pull_request' => ['event' => 'App\Events\PullRequestEvent']
//    ]);
//    ConfigFacade::shouldReceive('get')->with('githook.debug')->andReturn(true);
//    ConfigFacade::shouldReceive('get')->with('githook.middleware')->andReturn('web');
//    ConfigFacade::shouldReceive('get')->with('githook.controller')->andReturn('App\Http\Controllers\WebhookController');
//    ConfigFacade::shouldReceive('get')->with('githook.url')->andReturn('https://example.com/webhook');
//});

it('returns the webhook secret', function () {
    $secret = Config::secret();
    expect($secret)->toBe('secret');
});

it('returns the event class for a given event', function () {
    $pushEventClass = Config::eventClass('push');
    $pullRequestEventClass = Config::eventClass('pull_request');
    $nonExistentEventClass = Config::eventClass('non_existent_event');

    expect($pushEventClass)
        ->toBe('Digitlimit\Githook\Events\Push')
        ->and($pullRequestEventClass)
        ->toBe('Digitlimit\Githook\Events\PullRequest')
        ->and($nonExistentEventClass)
        ->toBeNull();
})->group('config');
//
//it('returns null for an invalid event class', function () {
//    ConfigFacade::shouldReceive('get')->with('githook.events')->andReturn([
//        'invalid_event' => ['event' => 'InvalidClass']
//    ]);
//
//    $invalidEventClass = Config::eventClass('invalid_event');
//    expect($invalidEventClass)->toBeNull();
//});
//
//it('checks if debugging is enabled', function () {
//    $isDebugging = Config::isDebugging();
//    expect($isDebugging)->toBeTrue();
//});
//
//it('returns the middleware', function () {
//    $middleware = Config::middleware();
//    expect($middleware)->toBe('web');
//});
//
//it('returns the controller', function () {
//    $controller = Config::controller();
//    expect($controller)->toBe('App\Http\Controllers\WebhookController');
//});
//
//it('returns the url', function () {
//    $url = Config::url();
//    expect($url)->toBe('https://example.com/webhook');
//});
