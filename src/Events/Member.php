<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Member extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'member';
}
