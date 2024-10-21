<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class DeploymentStatus extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'deployment_status';

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
