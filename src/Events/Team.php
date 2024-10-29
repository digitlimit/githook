<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Team extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'team';
}
