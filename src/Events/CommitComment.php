<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class CommitComment extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'commit_comment';
}
