<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class SecurityAdvisory extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'security_advisory';
}
