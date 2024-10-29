<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Membership extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'membership'
}
