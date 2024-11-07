<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;
use Digitlimit\Githook\EventInterface;

class GithubAppAuthorization extends AbstractEvent implements EventInterface
{
    /**
     * The type of event
     */
    public string $type = 'github_app_authorization';
}
