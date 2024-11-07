<?php

namespace Digitlimit\Githook;

use Illuminate\Broadcasting\InteractsWithSockets;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Symfony\Component\HttpFoundation\HeaderBag;

class AbstractEvent
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public function __construct(
        public array $content,
        public HeaderBag $headers
    ) {}

    /**
     * Get the event type
     */
    public function event(): string
    {
        return $this->headers->get('X-GitHub-Event');
    }

    /**
     * Get the event content
     */
    public function content(): array
    {
        return $this->content;
    }

    /**
     * Get the event type
     *
     * @return HeaderBag
     */
    public function headers(): HeaderBag
    {
        return $this->headers;
    }

    /**
     * Get the event type
     *
     * @return string
     */
    public function __get($name)
    {
        return $this->content[$name] ?? null;
    }
}
