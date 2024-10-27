<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class PersonalAccessTokenRequest extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'personal_access_token_request';
    
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