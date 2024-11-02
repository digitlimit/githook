<?php

namespace Digitlimit\Githook\Helpers;

class Config
{
    /**
     * Get the webhook secret
     */
    public static function secret(): string
    {
        return config('githook.secret');
    }

    /**
     * Get the event class
     *
     * @param string $event
     * @return string|null
     */
    public static function eventClass(string $event): ?string
    {
        $class = config('githook.events')[$event]['event'] ?? null;

        if(! $class || ! class_exists($class)) {
            return null;
        }

        return $class;
    }

    /**
     * Check if debugging is enabled
     */
    public static function isDebugging(): bool
    {
        return config('githook.debug');
    }

    public static function middleware(): string
    {
        return config('githook.middleware');
    }

    public static function controller(): string
    {
        return config('githook.controller');
    }

    public static function url(): string
    {
        return config('githook.url');
    }
}
