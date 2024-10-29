<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Fork extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'fork';
}
