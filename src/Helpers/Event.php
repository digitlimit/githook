<?php

namespace Digitlimit\Githook\Helpers;

use Digitlimit\Githook\AbstractEvent;
use Symfony\Component\HttpFoundation\HeaderBag;

class Event
{
    /**
     * Get the event class
     */
    public static function make(
        string $eventClass,
        array $content,
        HeaderBag $headers
    ): AbstractEvent {
        return new $eventClass($content, $headers);
    }
}
