<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class InstallationRepositories extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'installation_repositories';

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
