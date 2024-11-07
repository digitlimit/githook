<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;
use Digitlimit\Githook\EventInterface;

class OrgBlock extends AbstractEvent implements EventInterface
{
    /**
     * The type of event
     */
    public string $type = 'org_block';
}
