<?php

use Digitlimit\Githook\Providers\EventServiceProvider;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Event;

beforeEach(function () {
    // Mock the configuration values
    Config::set('githook.events', [
        [
            'event' => 'App\Events\SomeEvent',
            'listeners' => ['App\Listeners\SomeListener'],
        ],
    ]);

    Config::set('githook.*', [
        'App\Listeners\GlobalListener',
    ]);

    // Mock the refreshEventDispatcher method
    Cache::shouldReceive('refreshEventDispatcher')
        ->andReturnSelf();

    // Mock the configuration to enable caching
    Config::set('githook.cache', [
        'enabled' => true,
        'key' => 'githook.event_listener_mappings',
        'ttl' => 60,
    ]);
});

it('registers event listeners with caching enabled', function () {
    // Mock the configuration to disable caching
    Cache::shouldReceive('remember')
        ->once()
        ->with('githook.event_listener_mappings', 60, \Closure::class)
        ->andReturn([
            'App\Events\SomeEvent' => [
                'App\Listeners\SomeListener',
                'App\Listeners\GlobalListener',
            ],
        ]);

    Event::fake();

    // Boot the service provider
    $serviceProvider = new EventServiceProvider(app());
    $serviceProvider->boot();

    // Assert that the event listener was registered
    Event::assertListening('App\Events\SomeEvent', 'App\Listeners\SomeListener');
    Event::assertListening('App\Events\SomeEvent', 'App\Listeners\GlobalListener');
})->group('ServiceProvider');

it('builds event listener mappings without caching', function () {
    // Mock the configuration to disable caching
    Cache::shouldReceive('remember')
        ->never()
        ->with('githook.event_listener_mappings', 60, \Closure::class);

    // Mock the configuration to disable caching
    Config::set('githook.cache.enabled', false);

    Event::fake();

    // Boot the service provider
    $serviceProvider = new EventServiceProvider(app());
    $serviceProvider->boot();

    // Get the mappings
    $mappings = $serviceProvider->buildEventListenerMappings();

    // Assert the mappings
    expect($mappings)->toBe([
        'App\Events\SomeEvent' => [
            'App\Listeners\SomeListener',
            'App\Listeners\GlobalListener',
        ],
    ]);
})->group('ServiceProvider1');
