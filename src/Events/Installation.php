<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Installation extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'installation';
}
