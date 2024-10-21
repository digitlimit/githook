<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class DiscussionComment extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'discussion_comment';

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(
        public readonly object $payload
    ){
    }
}
