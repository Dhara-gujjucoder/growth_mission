<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;
use Symfony\Component\HttpFoundation\Response;

class StepVerified
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        if (Auth::check()) {
            $need_step = $request->step . $request->substep ?: 39;
            // dd($need_step, auth()->user()->step);
            // Check if the user is trying to access a step they haven't completed
            if ($need_step != auth()->user()->step) {
                // Redirect to the correct step
                $step = str_split(auth()->user()->step);
                return redirect()->route('step_reg', [$step[0], $step[1]]);
            }
            if($need_step == 39){
                return redirect()->route('dashboard');
            }
            // Check if the user has completed all steps and verified them
         
        }

        // Continue to the next middleware or controller
        return $next($request);
    }

}
