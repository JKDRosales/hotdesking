<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\BookingController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/support', function () {
    return view('support');
});

Route::get('/userguide', function () {
    return view('userguide');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/privacy', function () {
    return view('privacy');
});

Route::get('/dashboard', function () {
    return view('dashboard');
});

Route::get('/booking', function () {
    return view('booking');
});

Route::get('/bookings', function () {
    return view('bookings');
});

Route::get('/register', function () {
    return view('register');
});
