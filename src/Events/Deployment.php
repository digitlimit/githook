<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Deployment extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'deployment';
}
