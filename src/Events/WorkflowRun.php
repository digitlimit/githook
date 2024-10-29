<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class WorkflowRun extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'workflow_run';
}
