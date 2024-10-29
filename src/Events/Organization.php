<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Organization extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'organization';
}
