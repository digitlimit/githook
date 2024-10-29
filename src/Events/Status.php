<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Status extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'status';
}
