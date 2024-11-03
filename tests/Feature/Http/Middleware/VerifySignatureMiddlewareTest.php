<?php

use Digitlimit\Githook\Helpers\Signature;
use Digitlimit\Githook\Http\Middleware\VerifySignatureMiddleware;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * @runInSeparateProcess
 * @preserveGlobalState disabled
 */
it('handles a valid signature', function ()
{
    $secret = 'secret';
    $content = ['action' => 'star'];
    $signature = 'sha1=' . hash_hmac('sha1', json_encode($content), $secret);

    beforeEach(function () {
        // Close Mockery after each test to avoid conflicts
        Mockery::close();
    });

    // Create the request with raw content
    $request = Request::create(
        config('githook.url'),
        'POST',
        [],
        [],
        [],
        ['CONTENT_TYPE' => 'application/json'],
        json_encode(['action' => 'star'])
    );

    // Set the GitHub event header
    $request->headers->set('X-GitHub-Event', 'star');

    // Set the GitHub signature header
    $request->headers->set('X-Hub-Signature', $signature);

    // Create the middleware instance
    $middleware = new VerifySignatureMiddleware();

    // Create a closure to represent the next middleware
    $next = function ($req) {
        return new Response('OK', 200);
    };

    // Call the middleware handle method
    $response = $middleware->handle($request, $next);

    // Assert the response status is 200
    expect($response->getStatusCode())
        ->toBe(200)
        ->and($response->getContent())
        ->toBe('OK');
})->group('middleware');