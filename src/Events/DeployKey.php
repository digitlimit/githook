<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class DeployKey extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'deploy_key';

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
