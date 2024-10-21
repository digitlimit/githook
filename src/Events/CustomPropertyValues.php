<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class CustomPropertyValues extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'custom_property_values';

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
