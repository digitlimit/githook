<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Ping extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'ping';
}
