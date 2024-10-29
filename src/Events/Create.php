<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Create extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'create';
}
