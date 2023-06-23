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
    return view('dashboard');
});
Route::get('register', function () {
    return view('auth.register');
});

Route::post('register', 'AuthController@register');


Route::get('login', function () {
    return view('auth.login');
});

Route::post('login', 'AuthController@login');

Route::post('logout', 'AuthController@logout');