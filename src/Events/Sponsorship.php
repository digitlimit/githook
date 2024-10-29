<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Sponsorship extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'sponsorship';
}
