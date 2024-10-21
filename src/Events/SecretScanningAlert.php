<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class SecretScanningAlert extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'secret_scanning_alert';

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
