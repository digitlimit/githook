<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class PullRequest extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'pull_request';
}
