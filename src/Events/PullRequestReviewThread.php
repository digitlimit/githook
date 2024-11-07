<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;
use Digitlimit\Githook\EventInterface;

class PullRequestReviewThread extends AbstractEvent implements EventInterface
{
    /**
     * The type of event
     */
    public string $type = 'pull_request_review_thread';
}
