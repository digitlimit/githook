<?php

namespace Digitlimit\Githook;

/**
 * Class Githook
 * @package Digitlimit\Githook
 */
class Githook
{
    /**
     * Create a new event instance.
     *
     * @return void
     */
    public function __construct(
        private string $event,
        private object $payload,
        private string $signature,
        private string $secret,
    ){
    }

    /**
     * Verify the signature
     *
     * @return bool
     */
    public function verify(): bool
    {
        $hash = 'sha1='.hash_hmac(
                'sha1',
                $this->payload,
                $this->secret,
                false
            );

        return hash_equals($this->signature, $hash);
    }

    /**
     * Handle the event
     *
     * @return void
     */
    public function handle(): void
    {
        $event = $this->eventClass();
        
        event(new $event($this->payload));
    }

    /**
     * Get the event
     *
     * @return string
     */
    public function eventClass(): string
    {
        $events = config('githook.events');

        if (isset($events[$this->event])) {
            return $events[$this->event];
        }

        return $events['generic'];
    }
}
