<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class RedirectIfAuthenticated
{
    /**
     * Handle an incoming request.
     *
     * @param \Illuminate\Http\Request $request
     * @param \Closure                 $next
     * @param string|null              $guard
     *
     * @return mixed
     */
    public function handle($request, Closure $next, $guard = null)
    {
        if (Auth::guard($guard)->check() && Auth::user()->role->id == 1) {
            return redirect()->route('admin.dashboard');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 2) {
            return redirect()->route('gadmin.dashboard');
        }
         elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 3) {
            return redirect()->route('teacher.dashboard');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 4) {
            return redirect()->route('parent.dashboard');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 5) {
            return redirect()->route('student.dashboard');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 6) {
            return redirect()->route('accountant.dashboard');
        } elseif (Auth::guard($guard)->check() && Auth::user()->role->id == 7) {
            return redirect()->route('libarian.dashboard');
        } 
        else {
            return $next($request);
        }
    }
}
