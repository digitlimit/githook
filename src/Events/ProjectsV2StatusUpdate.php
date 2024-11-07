<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;
use Digitlimit\Githook\EventInterface;

class ProjectsV2StatusUpdate extends AbstractEvent implements EventInterface
{
    /**
     * The type of event
     */
    public string $type = 'projects_v2_status_update';
}
