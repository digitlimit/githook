<?php

namespace Digitlimit\Githook\Http\Middleware;

use Closure;
use Digitlimit\Githook\Helpers\Config;
use Digitlimit\Githook\Helpers\Signature;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class VerifySignatureMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  Closure(Request): (Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $secret = Config::secret();
        $signature = $request->header('X-Hub-Signature');
        $payload = $request->getContent();

        if (! Signature::verify($payload, $signature, $secret)) {
            info('Github signature does not match');

            return response('Unauthorized', 401);
        }

        return $next($request);
    }
}
