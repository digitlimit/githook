<?php

namespace Digitlimit\Githook;

use Illuminate\Broadcasting\Channel;
use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Broadcasting\PresenceChannel;
use Illuminate\Broadcasting\PrivateChannel;
use Illuminate\Contracts\Broadcasting\ShouldBroadcast;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\HeaderBag;

class AbstractEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public array $payload,
        public HeaderBag $headers
    ){
    }

    /**
     * Get the event type
     *
     * @return string
     */
    public function event(): string
    {
        return $this->headers->get('X-GitHub-Event');
    }

    /**
     * Get the event payload
     *
     * @return array
     */
    public function payload(): array
    {
        return $this->payload;
    }

    /**
     * Get the event type
     *
     * @return string
     */
    public function headers(): HeaderBag
    {
        return $this->headers;
    }
}
