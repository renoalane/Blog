<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class IsAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {

        // Pengecekan dengan authorisation username

        if (auth()->guest() || auth()->user()->username !== 'reno') {
            abort(403);
        }

        // Pengecekan dengan field baru di db

        if (auth()->guest() || auth()->user()->is_admin) {
            abort(403);
        }

        return $next($request);
    }
}
