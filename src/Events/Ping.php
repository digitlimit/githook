<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Ping extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'ping';

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(
        public readonly object $payload
    ){
    }
}