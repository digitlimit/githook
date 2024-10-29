<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Project extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'project';
}
