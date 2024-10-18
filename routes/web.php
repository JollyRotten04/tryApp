<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;

// Route for homepage, guarded by CheckAge middleware
Route::get('/welcome', function () {
    return view('welcome');
})->middleware([CheckAge::class])->name('welcome');

// Route for age prompt where users can input their age
Route::get('/', function () {
    return view('agePrompt'); // Render the age_prompt view
})->name('agePrompt');

// Route for unauthorized access if user is under 18
Route::get('/unauthorized', function () {
    return view('unauthorized'); // Render the unauthorized view
})->name('unauthorized');

// Route to handle age submission (POST request)
Route::post('/set-age', function (Illuminate\Http\Request $request) {
    // Validate and store the user's age in the session
    $request->validate(['age' => 'required|integer|min:0']);
    
    session(['user_age' => $request->input('age')]);

    return redirect('/welcome'); // Redirect to the homepage after setting the age
})->name('set.age');
