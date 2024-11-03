<?php

use Digitlimit\Githook\Helpers\Signature;

it('verifies a valid signature', function ()
{
    $content = 'example content';
    $secret = 'secret';
    $signature = 'sha1=' . hash_hmac('sha1', $content, $secret, false);

    $result = Signature::verify($content, $signature, $secret);

    expect($result)->toBeTrue();
});

it('fails to verify an invalid signature', function ()
{
    $content = 'example content';
    $secret = 'secret';
    $invalidSignature = 'sha1=invalidhash';

    $result = Signature::verify($content, $invalidSignature, $secret);

    expect($result)->toBeFalse();
});

it('fails to verify with wrong secret', function () {
    $content = 'example content';
    $secret = 'secret';
    $wrongSecret = 'wrongsecret';
    $signature = 'sha1=' . hash_hmac('sha1', $content, $secret, false);

    $result = Signature::verify($content, $signature, $wrongSecret);

    expect($result)->toBeFalse();
});
