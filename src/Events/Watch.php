<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Watch extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'watch';
}
