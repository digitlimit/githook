<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class DependabotAlert extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'dependabot_alert';

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
