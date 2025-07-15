<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\QuizSubmission;

class PreventAccessAfterSubmit
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $submitted = QuizSubmission::where('user_id', Auth::id())->exists();
            if ($submitted) {
                abort(403, '⛔ You already submitted the quiz.');
            }
        }

        return $next($request);
    }
}
