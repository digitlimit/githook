<?php

use Digitlimit\Githook\Events\Star;
use Digitlimit\Githook\Helpers\Event;
use Symfony\Component\HttpFoundation\HeaderBag;

it('creates an instance of the specified event class', function () {
    $content = ['key' => 'value'];
    $headers = new HeaderBag(['header-key' => 'header-value']);
    $eventClass = Star::class;

    $event = Event::make($eventClass, $content, $headers);

    expect($event)
        ->toBeInstanceOf($eventClass)
        ->and($event->content())->toBe($content)
        ->and($event->headers())->toBe($headers);
});
