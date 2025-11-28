<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\BookingController;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return view('Home.index');
});

Route::get('/Booking', function () {
    return view('Home.Booking');
});

Route::get('/Booking', [BookingController::class, 'create']);
Route::post('/store', [BookingController::class, 'store']);
