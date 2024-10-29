<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class ProjectsV2StatusUpdate extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'projects_v2_status_update';
}
