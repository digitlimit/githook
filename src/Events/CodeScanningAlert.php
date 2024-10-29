<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class CodeScanningAlert extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'code_scanning_alert';
}
