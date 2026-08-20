<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Symfony\Component\HttpFoundation\Response;

class EnsureAdmin
{
    /**
     * Handle an incoming request.
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (! Auth::check() || ! Auth::user()->is_admin) {
            if ($request->expectsJson()) {
                abort(403, 'You are not authorized to access this page.');
            }

            return redirect()->route('admin.login');
        }

        return $next($request);
    }
}
