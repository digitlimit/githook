<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class MergeGroup extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'merge_group';
}
