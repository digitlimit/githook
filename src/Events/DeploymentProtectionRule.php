<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class DeploymentProtectionRule extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'deployment_protection_rule';
}
