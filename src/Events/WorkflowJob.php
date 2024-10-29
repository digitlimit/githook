<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class WorkflowJob extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'workflow_job';
}
