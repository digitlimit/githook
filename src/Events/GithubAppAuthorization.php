<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class GithubAppAuthorization extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'github_app_authorization';

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
