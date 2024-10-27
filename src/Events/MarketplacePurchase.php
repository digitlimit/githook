<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class MarketplacePurchase extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'marketplace_purchase';
    
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