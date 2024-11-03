<?php

use Digitlimit\Githook\Events\Star;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Event;
use Digitlimit\Githook\Helpers\Config;
use Digitlimit\Githook\Http\Controllers\GithookController;

it('handles a GitHub webhook event', function ()
{
    // Mock the request and headers
    $request = Request::create(Config::url(), 'POST', [
        'payload' => 'test'
    ]);

    // Set the GitHub event header
    $request->headers->set('X-GitHub-Event', 'star');

    // Spy on the event dispatch
    Event::fake();

    // Call the controller
    $controller = new GithookController();
    $response = $controller($request);

    // Assertions
    Event::assertDispatched(Star::class, function ($event) {
        return $event->content() === ['payload' => 'test'];
    });

    expect($response->getStatusCode())
        ->toBe(200)
        ->and($response->getContent())
        ->toBe('{"message":"Event received"}');

    // Clean up Mockery
    Mockery::close();
});

it('returns a 404 response if the event class is not found', function ()
{
    // Mock the request and headers
    $request = Request::create(Config::url(), 'POST', [
        'payload' => 'test'
    ]);

    // Set the GitHub event header
    $request->headers->set('X-GitHub-Event', 'invalid-event');

    // Call the controller
    $controller = new GithookController();
    $response = $controller($request);

    // Assertions
    expect($response->getStatusCode())
        ->toBe(404)
        ->and($response->getContent())
        ->toBe('{"message":"Event not found"}');
});