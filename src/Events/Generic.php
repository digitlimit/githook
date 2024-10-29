<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class Generic extends AbstractEvent
{
    public string $type = 'generic';
}
