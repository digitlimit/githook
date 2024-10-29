<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Package extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'package';
}
