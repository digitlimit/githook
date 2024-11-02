<?php

namespace Digitlimit\Githook\Http\Controllers;

use Digitlimit\Githook\Helpers\Config;
use Digitlimit\Githook\Helpers\Event;
use Illuminate\Http\Request;
use Digitlimit\Githook\Githook;
use Symfony\Component\HttpFoundation\HeaderBag;

/**
 * Class GithookController
 * @package Digitlimit\Githook\Http\Controllers
 */
class GithookController
{
    /**
     * Handle incoming webhook request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function __invoke(Request $request)
    {
        $headers = $request->headers;
        $githubEvent = $headers->get('X-GitHub-Event');

        if(Config::isDebugging()) {
            info('Githook event: ' . $githubEvent);
            info('Headers: ', $headers->all());
            info('Content: ', $request->all());
        }

        // Get the event class
        $eventClass = Config::eventClass($githubEvent);

        // If the event class is not found, return
        if(! $eventClass) {
            info('Event class not found in config file' . $githubEvent);
            return response()->json(['message' => 'Event not found'], 404);
        }

        // Make the event
        $event = Event::make($eventClass, $request->all(), $headers);

        // Dispatch the event
        event($event);

        return response()->json(['message' => 'Event received']);
    }
}
