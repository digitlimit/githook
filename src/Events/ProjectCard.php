<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class ProjectCard extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'project_card';
}
