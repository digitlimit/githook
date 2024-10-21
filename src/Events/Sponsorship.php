<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Sponsorship extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'sponsorship';

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
