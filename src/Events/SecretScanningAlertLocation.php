<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class SecretScanningAlertLocation extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'secret_scanning_alert_location';

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
