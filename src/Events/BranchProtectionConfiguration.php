<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class BranchProtectionConfiguration extends AbstractEvent
{
    /**
     * The type of event
     */
    public $type = 'branch_protection_configuration';

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
