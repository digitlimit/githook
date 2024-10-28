<?php

namespace Digitlimit\Githook;

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
     * @param array $headers
     * @return string|null
     */
    public static function event(
        string $event,
        array $payload,
        array $headers
    ): ?string {
        $class = config('githook.events')[$event] ?? null;

        if(! $class || ! class_exists($class)) {
            return null;
        }

        return new $class($event, $payload, $headers);
    }
}
