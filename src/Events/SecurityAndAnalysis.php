<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class SecurityAndAnalysis extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'security_and_analysis';
}
