<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class RepositoryImport extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'repository_import';

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
