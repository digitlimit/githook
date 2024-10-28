<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class CheckRun extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'check_run';
}
