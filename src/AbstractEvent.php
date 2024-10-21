<?php

namespace Digitlimit\Githook;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;

class AbstractEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    /**
     * The type of event
     */
    public string $type = '';

    public function setType(string $type): void
    {
        $this->type = $type;
    }

    public function type(): string
    {
        return $this->type;
    }

    public function payload(): object
    {
        return $this->payload;
    }

//    /**
//     * Get the channels the event should broadcast on.
//     *
//     * @return array<int, \Illuminate\Broadcasting\Channel>
//     */
//    public function broadcastOn(): array
//    {
//        return [
//            new PrivateChannel('channel-name'),
//        ];
//    }
}
