<?php

namespace App\Http\Middleware;

use App\Providers\RouteServiceProvider;
use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @param  string|null  ...$guards
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$guards)
    {
        $guards = empty($guards) ? [null] : $guards;

        foreach ($guards as $guard) {
            if ((Auth::guard($guard)->check())&&(session('utype')==='RECP')) {
                return redirect(RouteServiceProvider::RECP_HOME);
            }
            else if ((Auth::guard($guard)->check())&&(session('utype')==='DOC')) {
                return redirect(RouteServiceProvider::RECP_HOME);
            }
            else if((Auth::guard($guard)->check())&&(session('utype')==='USR')) {
                return redirect(RouteServiceProvider::HOME);
            }
            else if((Auth::guard($guard)->check())&&(session('utype')==='LAB')) {
                return redirect(RouteServiceProvider::LAB_HOME);
            }
            else if((Auth::guard($guard)->check())&&(session('utype')==='MIN')) {
                return redirect(RouteServiceProvider::MIN_HOME);
            }
            else if((Auth::guard($guard)->check())&&(session('utype')==='XR')) {
                return redirect(RouteServiceProvider::XR_HOME);
            }
        }

        return $next($request);
    }
}
