<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;
use Digitlimit\Githook\EventInterface;

class CheckRun extends AbstractEvent implements EventInterface
{
    /**
     * The type of event
     */
    public string $type = 'check_run';
}
