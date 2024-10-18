<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckAge
{
    public function handle(Request $request, Closure $next)
    {
        // Check if the user's age is set in the session
        $age = session('user_age');

        // Redirect to the age prompt page if age is not set or user is under 18
        if (is_null($age)) {
            return redirect()->route('agePrompt');
        } elseif ($age < 18) {
            // Redirect to unauthorized page if user is underage
            return redirect()->route('unauthorized');
        }

        // Allow access if the age is valid
        return $next($request);
    }
}
