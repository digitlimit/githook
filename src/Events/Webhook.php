<?php

namespace Digitlimit\Githook\Events;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class Webhook
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The type of event
     *
     * @var 
     */
    public $type;

    /**
     * The event payload
     *
     * @var 
     */
    public $payload;

    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(object $payload, string $type)
    {
        $this->payload = $payload;
        $this->type = $type;
    }

    /**
     * Get the channels the event should broadcast on.
     *
     * @return \Illuminate\Broadcasting\Channel|array
     */
    public function broadcastOn()
    {
        return new PrivateChannel('channel-name');
    }
}
