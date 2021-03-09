<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class GuardsClientMiddleware
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
        if (Auth::check() && Auth::user()->role_id == '2') {
            return $next($request);
        }
         elseif (Auth::check() && Auth::user()->role_id == '1') {

            return redirect('/admin');
        }

        elseif (Auth::check() && Auth::user()->role_id == '3') {

            return redirect('/Operations');
        }
        elseif (Auth::check() && Auth::user()->role_id == '4') {

            return redirect('/superadmin');
        }

        else {
            return redirect('/login');
        }
    }
}
