<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class SubIssues extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'sub_issues';
}
