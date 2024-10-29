<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class DeploymentStatus extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'deployment_status';
}
