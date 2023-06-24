<?php

use App\Http\Controllers\Auth\AuthController;
use App\Http\Controllers\VerifyBvn;
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

Route::middleware('auth')->get('/', function () {
    return view('dashboard');
});

Route::post('/', [VerifyBvn::class, 'verify_bvn']);

Route::get('register', function () {
    return view('auth.register');
});

Route::post('register', [AuthController::class, 'register']);


Route::get('login', function () {
    return view('auth.login');
})->name('login');

Route::post('login', [AuthController::class, 'login']);

Route::get('logout', [AuthController::class, 'logout']);