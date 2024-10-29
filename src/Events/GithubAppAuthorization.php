<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class GithubAppAuthorization extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'github_app_authorization';
}
