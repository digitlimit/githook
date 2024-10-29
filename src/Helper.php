<?php

namespace Digitlimit\Githook;

use Digitlimit\Githook\AbstractEvent;
use Symfony\Component\HttpFoundation\HeaderBag;

/**
 * Class Helper
 * @package Digitlimit\Githook
 */
class Helper
{
    /**
     * Verify github the signature
     *
     * @param string $payload
     * @param string $signature
     * @param string $secret
     * @return bool
     */
    public static function verifySignature(
        string $payload,
        string $signature,
        string $secret
    ): bool {
        $hash = 'sha1=' . hash_hmac(
                'sha1',
                $payload,
                $secret,
                false
            );

        return hash_equals($signature, $hash);
    }

    /**
     * Get the event
     *
     * @param string $event
     * @param array $payload
     * @param HeaderBag $headers
     * @return string|null
     */
    public static function event(string $event, array $payload, HeaderBag $headers): ?AbstractEvent
    {
        $class = config('githook.events')[$event]['event'] ?? null;

        if(! $class || ! class_exists($class)) {
            return null;
        }

        return new $class($payload, $headers);
    }
}
