<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Gollum extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'gollum';
}
