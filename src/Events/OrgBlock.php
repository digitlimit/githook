<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class OrgBlock extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'org_block'
}
