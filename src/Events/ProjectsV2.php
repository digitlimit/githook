<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class ProjectsV2 extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'projects_v2';

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
