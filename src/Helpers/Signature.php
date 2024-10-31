<?php

namespace Digitlimit\Githook\Helpers;

class Signature
{
    public static function verify(
        string $content,
        string $signature,
        string $secret
    ): bool {
        $hash = 'sha1=' . hash_hmac(
                'sha1',
                $content,
                $secret,
                false
            );

        return hash_equals($signature, $hash);
    }
}
