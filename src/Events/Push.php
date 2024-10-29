<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Push extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'push';
}
