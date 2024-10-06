<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Log;

class CheckAge
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next): Response
    {
        // Check if the user has already entered their age
        Log::info('Middleware working');

        if (Session::has('user_age')) {
            $age = Session::get('user_age');
            Log::info('User age found in session: ' . $age); // Log user age
            
            if ($age < 18) {
                // Log::warning('User is under 18, redirecting to unauthorized page.');
                return redirect()->route('unauthorized');
            }

            else{
                return redirect()->route('homepage');
            }
        } 

        // If the user hasn't entered their age, prompt them
        return redirect()->route('age_prompt');
    }
}
