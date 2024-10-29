<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Release extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'release';
}
