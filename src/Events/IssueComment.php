<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class IssueComment extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'issue_comment';
    
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
