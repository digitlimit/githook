<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Delete extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'delete';
}
