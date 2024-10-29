<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class DeployKey extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'deploy_key';
}
