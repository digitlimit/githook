<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Star extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'star';
}
