<?php

namespace Digitlimit\Githook\Events;

use Digitlimit\Githook\AbstractEvent;

class MarketplacePurchase extends AbstractEvent
{
    /**
     * The type of event
     */
    public string $type = 'marketplace_purchase';
}
