<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class NoPayload extends AbstractEvent
{
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(
        public readonly array $request
    ){
    }
}
