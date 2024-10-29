<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class DeploymentReview extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'deployment_review';
}
