<?php

use Illuminate\Support\Facades\Route;
use App\Http\Middleware\CheckAge;

/*Route::get('/', function () {
    return view('welcome');
});*/

// Route::get('/', function () {
//     return view('homepage');
// });

Route::get('/', function () {
    // Your homepage logic...
})->middleware([CheckAge::class])->name('homepage');

Route::get('/age_prompt', function () {
    return view('age_prompt'); // Render the age_prompt view
})->name('age_prompt');

Route::get('/unauthorized', function () {
    return view('unauthorized'); // Return your unauthorized view
})->name('unauthorized');

// Route that enforces a 21-year-old restriction
// Route::get('/restricted', function () {
//     return view('restricted'); // Render the restricted view
// })->middleware([CheckAge::class . ':21'])->name('restricted');

Route::post('/set-age', function (Illuminate\Http\Request $request) {
    $request->validate(['age' => 'required|integer|min:0']);
    
    session(['user_age' => $request->input('age')]);
    
    // Log the session to verify that user_age is set
    Log::info('Session data after setting age: ', session()->all());

    return redirect('/'); // Ensure to redirect to a route with middleware
})->name('set.age');

Route::get('/about', function () {
    $username = session('username', 'Guest');
    return view('about', ['username' => $username]);
})->name('about');

Route::get('/content', function () {
    $username = session('username', 'Guest');
    return view('content', ['username' => $username]);
})->name('content');

Route::get('/amenities', function () {
    $username = session('username', 'Guest');
    return view('amenities', ['username' => $username]);
})->name('amenities');

Route::get('/room_featured', function () {
    $username = session('username', 'Guest');
    return view('room_featured', ['username' => $username]);
})->name('room_featured');

Route::get('/room_suites', function () {
    $username = session('username', 'Guest');
    return view('room_suites', ['username' => $username]);
})->name('room_suites');

Route::get('/resume', function () {
    $username = session('username', 'Guest');
    return view('resume', ['username' => $username]);
})->name('resume');

Route::get('/contactus', function () {
    $username = session('username', 'Guest');
    return view('contactus', ['username' => $username]);
})->name('contactus');

Route::get('/username_form', function () {
    return view('username_form');
})->name('username_form');

Route::get('/user', function () {
    $username = request()->query('username', 'Guest');
    session(['username' => $username]);
    return redirect()->route('user.welcome', ['username' => $username]); 
})->name('user');

Route::get('/homepage', function () {
    $username = session('username', 'Guest');
    return view('homepage', ['username' => $username]);
})->name('homepage');

Route::get('/aboutus', function () {
    $username = session('username', 'Guest');
    return view('about', ['username' => $username]);
})->name('aboutus');

Route::get('/content', function () {
    $username = session('username', 'Guest');
    return view('content', ['username' => $username]);
})->name('content');

Route::get('/room_suites', function () {
    $username = session('username', 'Guest');
    return view('room_suites', ['username' => $username]);
})->name('room_suites');

Route::get('/room_featured', function () {
    $username = session('username', 'Guest');
    return view('room_featured', ['username' => $username]);
})->name('room_featured');

Route::get('/amenities', function () {
    $username = session('username', 'Guest');
    return view('amenities', ['username' => $username]);
})->name('amenities');

Route::get('/user/{username}', function ($username) {
    session(['username' => $username]);
    return view('homepage', ['username' => $username]);
})->name('user.welcome');

//Layout routes
Route::get('/Layout', function () {
    return view('../components/Layout');
});

// Route::group(['middleware' => 'CheckAge'], function () {
//     Route::get('/', function () {
//         return view('homepage');
//     })->name('homepage');

//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });