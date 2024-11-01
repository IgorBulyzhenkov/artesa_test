<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\UsersController;
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
    return redirect( route('home') );
});

Route::middleware('auth')->group(function () {
   Route::get('/',                  [UsersController::class, 'index'])->name('home');
   Route::get('/logout',            [LogoutController::class, 'logout'])->name('logout');
    Route::get('/profile',          [UsersController::class, 'profile'])->name('profile');
});

Route::middleware('guest')->group(function () {
    Route::get('/login',            [AuthController::class, 'authPage'])->name('login');
    Route::post('/login',           [AuthController::class, 'login'])->name('login_auth');
});
