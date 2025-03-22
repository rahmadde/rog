<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('home');
});

Route::get('/pesan-makanan', function () {
    return view('pesan-makanan/pesan-makanan');
});

Route::get('/booking-pc', function () {
    return view('booking-pc/booking-pc');
});

Route::get('/biling', function () {
    return view('biling/biling');
});