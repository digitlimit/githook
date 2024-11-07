<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;
use Digitlimit\Githook\EventInterface;

class WorkflowRun extends AbstractEvent implements EventInterface
{
    /**
     * The type of event
     */
    public string $type = 'workflow_run';
}
