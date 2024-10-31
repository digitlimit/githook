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
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        $headers = $request->headers;
        $githubEvent = $headers->get('X-GitHub-Event');

        if(Helper::isDebugging()) {
            info('Githook event: ' . $githubEvent);
            info('Headers: ', $headers->all());
            info('Content: ', $request->all());
        }

        // Get the event class
        $eventClass = Config::eventClass($githubEvent);

        // If the event class is not found, return
        if(! $eventClass) {
            info('Event class not found in config file' . $githubEvent);
            return;
        }

        // Make the event
        $event = Event::make($eventClass, $request->all(), $headers);

        // Dispatch the event
        event($event);
    }
}
