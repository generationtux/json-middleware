<?php

namespace GenTux\Json\Http;

use Closure;

class ValidateIsJsonMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if ($request->isMethod('POST') || $request->isMethod('PUT')) {
            json_decode($request->getContent());
            if (json_last_error() != JSON_ERROR_NONE) {
                return response()->json("Request must be json", 400);
            }
        }

        return $next($request);
    }
}
