<?php

namespace Digitlimit\Githook;

use Symfony\Component\HttpFoundation\HeaderBag;

interface EventInterface
{
    /**
     * Get the event type
     */
    public function event(): string;

    /**
     * Get the event content
     */
    public function content(): array;

    /**
     * Get the event type
     */
    public function headers(): HeaderBag;

    /**
     * Get the event type
     *
     * @return string
     */
    public function __get($name);
}
