<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class PublicEvent extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'public';
}
