<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class IsVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (!auth()->user()->step_verified) {
            // Redirect to dashboard if they completed all steps (last step is 39)
            $step = str_split(auth()->user()->step);
            return redirect()->route('step_reg', [$step[0], $step[1]]);
        }

        // Continue to the next middleware or controller
        return $next($request);
    }

}
