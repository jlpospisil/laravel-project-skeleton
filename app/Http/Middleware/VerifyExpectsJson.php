<?php

namespace App\Http\Middleware;

use Closure;

class VerifyExpectsJson
{
    public function handle($request, Closure $next)
    {
        if ($request->expectsJson()) {
            return $next($request);
        }

        abort(404);
    }
}
