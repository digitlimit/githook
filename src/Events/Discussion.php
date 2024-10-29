<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Discussion extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'discussion';
}
