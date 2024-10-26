<?php

namespace Digitlimit\Githook\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Digitlimit\Githook\Events\NoPayload;
use Digitlimit\Githook\Githook;

//X-GitHub-Hook-ID: The unique identifier of the webhook.
//X-GitHub-Event: The name of the event that triggered the delivery.
//X-GitHub-Delivery: A globally unique identifier (GUID) to identify the event.
//X-Hub-Signature: This header is sent if the webhook is configured with a secret. This is the HMAC hex digest of the request body, and is generated using the SHA-1 hash function and the secret as the HMAC key. X-Hub-Signature is provided for compatibility with existing integrations. We recommend that you use the more secure X-Hub-Signature-256 instead.
//X-Hub-Signature-256: This header is sent if the webhook is configured with a secret. This is the HMAC hex digest of the request body, and is generated using the SHA-256 hash function and the secret as the HMAC key. For more information, see "Validating webhook deliveries."
//User-Agent: This header will always have the prefix GitHub-Hookshot/.
//X-GitHub-Hook-Installation-Target-Type: The type of resource where the webhook was created.
//X-GitHub-Hook-Installation-Target-ID: The unique identifier of the resource where the webhook was created.

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
            return;
        }

        // get payload
        $payload = json_decode($request->payload);
        $event = $request->header('X-GitHub-Event');
        $signature = $request->header('X-Hub-Signature');
        $secret = config('githook.secret');

        $githook = new Githook($event, $payload, $signature, $secret);

        if (! $githook->verify()) {
            return response('Unauthorized', 401);
        }

        $githook->handle();

        //    }
//    {
//        $github_hash = request()->header('X-Hub-Signature');
//        $secret = config('githook.secret');
//        $payload = request()->getContent();
//
//        $local_hash = 'sha1='.hash_hmac('sha1', $payload, $secret, false);
//
//        return hash_equals($github_hash, $local_hash);

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
