<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;
use Digitlimit\Githook\EventInterface;

class Generic extends AbstractEvent implements EventInterface
{
    public string $type = 'generic';
}
