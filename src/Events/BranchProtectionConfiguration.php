<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;
use Digitlimit\Githook\EventInterface;

class BranchProtectionConfiguration extends AbstractEvent implements EventInterface
{
    /**
     * The type of event
     */
    public string $type = 'branch_protection_configuration';
}
