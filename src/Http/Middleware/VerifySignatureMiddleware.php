<?php

namespace Digitlimit\Githook\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Digitlimit\Githook\Helper;

class VerifySignatureMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $secret = config('githook.secret');
        $signature = $request->header('X-Hub-Signature');
        $payload = $request->getContent();

        if (! Helper::verifySignature($payload, $signature, $secret)) {
            info('Github signature does not match');
            return response('Unauthorized', 401);
        }

        return $next($request);
    }
}
