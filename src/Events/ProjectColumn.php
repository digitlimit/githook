<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class ProjectColumn extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'project_column';

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
