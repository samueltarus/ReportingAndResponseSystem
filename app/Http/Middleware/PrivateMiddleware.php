<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class PrivateMiddleware
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
        if (Auth::check() && Auth::user()->role_id == '1') {
            return $next($request);

        }
         elseif (Auth::check() && Auth::user()->role_id == '2') {

            return redirect('/guards');

        }
        elseif (Auth::check() && Auth::user()->role_id == '3') {

            return redirect('/Operation');
        }
         else {
            return redirect('/login');
        }
    }
}
