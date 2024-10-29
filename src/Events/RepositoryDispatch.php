<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class RepositoryDispatch extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'repository_dispatch';
}
