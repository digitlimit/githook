<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;
use Digitlimit\Githook\EventInterface;

class PersonalAccessTokenRequest extends AbstractEvent implements EventInterface
{
    /**
     * The type of event
     */
    public string $type = 'personal_access_token_request';
}
