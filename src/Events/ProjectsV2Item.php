<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class ProjectsV2Item extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'projects_v2_item';
}
