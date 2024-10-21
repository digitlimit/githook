<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class PullRequestReviewComment extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'pull_request_review_comment';

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
