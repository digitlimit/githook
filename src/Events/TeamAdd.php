<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class TeamAdd extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'team_add';
}
