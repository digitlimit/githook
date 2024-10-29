<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Repository extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'repository';
}
