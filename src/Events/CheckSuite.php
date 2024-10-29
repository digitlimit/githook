<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class CheckSuite extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'check_suite';
}
