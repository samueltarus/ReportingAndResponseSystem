<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  $guard
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role->id==1) {

            return view('private_portal.private_app');

        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id==2) {

            return view('guards_clients_portal.guard_dashboard');

        }

        elseif (Auth::guard($guard)->check() && Auth::user()->role->id==3) {

            return view('private_portal.operations.all_operations');


        }

        else {
            return $next($request);
        }

    }
}
