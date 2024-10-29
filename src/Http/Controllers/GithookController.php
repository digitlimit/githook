<?php

namespace Digitlimit\Githook\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Digitlimit\Githook\Githook;
use Digitlimit\Githook\Helper;
use Symfony\Component\HttpFoundation\HeaderBag;

/**
 * Class GithookController
 * @package Digitlimit\Githook\Http\Controllers
 */
class GithookController extends Controller
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

        $event = Helper::event(
            $githubEvent,
            $request->all(),
            $headers
        );

        if(! $event) {
            info('Event not found in config file' . $githubEvent);
            return;
        }

        event($event);
    }
}
