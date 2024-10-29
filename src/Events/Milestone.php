<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Milestone extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'milestone';
}
