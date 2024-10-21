<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class CustomProperty extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'custom_property';

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
