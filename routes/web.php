<?php

use Illuminate\Support\Facades\Route;

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
    return view('home');
});

Route::get('/home', function () {
    return view('home');
});

Route::get('/scarica', function () {
    return view('scarica');
});

Route::get('/nitro', function () {
    return view('nitro');
});

Route::get('/sicurezza', function () {
    return view('sicurezza');
});
Route::get('/assistenza', function () {
    return view('assistenza');
});
