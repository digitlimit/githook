<?php

namespace Digitlimit\Githook\Http\Controllers;

use App\Http\Controllers\Controller;
use Digitlimit\Githook\Events\NoPayload;
use Digitlimit\Githook\Events\Webhook;
use Illuminate\Http\Request;

class GithookController extends Controller
{
    /**
     * Perform the git hook.
     *
     * @return void
     */
    public function __invoke(Request $request)
    {
        if (! $request->has('payload')) {
            NoPayload::dispatch($request->all());
            info('No payload received');

            return;
        }

        // get payload
        $payload = json_decode($request->payload);
        $event = $request->header('X-GitHub-Event');

        event(new Webhook($payload, $event));
    }

    /**
     * Check authentication
     *
     * @param [type] $payload
     * @return void
     */
    protected function authCheck()
    {
        $github_hash = request()->header('X-Hub-Signature');
        $secret = config('githook.secret');
        $payload = request()->getContent();

        $local_hash = 'sha1='.hash_hmac('sha1', $payload, $secret, false);

        return hash_equals($github_hash, $local_hash);
    }
}
