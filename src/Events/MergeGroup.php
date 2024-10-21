<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class MergeGroup extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'merge_group';
    
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
