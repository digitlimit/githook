<?php

namespace Digitlimit\Githook\Providers;

use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Cache;

class EventServiceProvider extends ServiceProvider
{
    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        // Fetch cache configuration
        $cacheConfig = config('githook.cache');
        $cacheEnabled = $cacheConfig['enabled'] ?? false;
        $cacheKey = $cacheConfig['key'] ?? 'githook.event_listener_mappings';
        $cacheTTL = $cacheConfig['ttl'] ?? 60;

        // If caching is enabled, use cache, otherwise build mappings every request
        $mappings = $cacheEnabled
            ? Cache::remember($cacheKey, $cacheTTL, function () {
                return $this->buildEventListenerMappings();
            })
            : $this->buildEventListenerMappings();

        // Register each event and its listeners
        foreach ($mappings as $event => $listeners) {
            foreach ($listeners as $listener) {
                $this->app['events']->listen($event, $listener);
            }
        }
    }

    /**
     * Build event-listener mappings from configuration.
     *
     * @return array
     */
    protected function buildEventListenerMappings()
    {
        $mappings = [];
        $githookEvents = config('githook.events', []);
        $globalListeners = config('githook.*', []);

        foreach ($githookEvents as $eventConfig) {
            $event = $eventConfig['event'] ?? null;
            $listeners = $eventConfig['listeners'] ?? [];

            if ($event) {
                $mappings[$event] = array_merge($listeners, $globalListeners);
            }
        }

        return $mappings;
    }
}
