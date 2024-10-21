<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class SecurityAdvisory extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'security_advisory';

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
