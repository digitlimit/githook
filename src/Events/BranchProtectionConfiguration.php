<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class BranchProtectionConfiguration extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'branch_protection_configuration';
}
