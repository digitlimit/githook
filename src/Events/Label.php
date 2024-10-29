<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Label extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'label';
}
