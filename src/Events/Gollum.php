<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;
use Digitlimit\Githook\EventInterface;

class Gollum extends AbstractEvent implements EventInterface
{
    /**
     * The type of event
     */
    public string $type = 'gollum';
}
