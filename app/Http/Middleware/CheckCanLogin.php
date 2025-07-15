<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckCanLogin
{
   public function handle(Request $request, Closure $next)
    {
        if (Auth::check() && (int)Auth::user()->can_login === 1 && Auth::user()->role === 'user') {
            return $next($request);
        }
        abort(403);
    }
}
