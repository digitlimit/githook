<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class CodeScanningAlert extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'code_scanning_alert';

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
