<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class UsertypeMiddleware {
    public function handle(Request $request, Closure $next, $usertytpe): Response {
        if ($request->user()->usertype !== $usertytpe) {
            abort(404);
        }
        return $next($request);
    }
}
