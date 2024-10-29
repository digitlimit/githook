<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class RepositoryRuleset extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'repository_ruleset';
}
