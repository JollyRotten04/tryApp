<?php

use Illuminate\Support\Facades\Route;

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () {
    return view('homepage');
});

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