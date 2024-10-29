<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Meta extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'meta';
}
