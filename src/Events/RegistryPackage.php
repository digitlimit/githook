<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class RegistryPackage extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'registry_package';
}
