<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class RepositoryImport extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'repository_import';
}
