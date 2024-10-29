<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class DiscussionComment extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'discussion_comment';
}
