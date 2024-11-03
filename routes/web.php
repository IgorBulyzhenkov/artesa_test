<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\ProductsController;
use App\Http\Controllers\TagsController;
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
    return redirect(route('home'));
});

Route::middleware('auth')->group(function () {
    Route::get('/',                     [DashboardController::class, 'index'])->name('home');

    Route::get('/logout',               [LogoutController::class, 'logout'])->name('logout');

    Route::get('/profile',              [UsersController::class, 'profile'])->name('profile');

    Route::get('categories/{id}',       [CategoriesController::class, 'show'])->name('categories.show');
    Route::get('categories-tree/{id}',  [CategoriesController::class, 'tree'])->name('categories.show_tree');

    Route::prefix('/products')->name('products.')->group(function () {
        Route::get('/{id}',             [ProductsController::class, 'edit'])->name('edit');
        Route::post('/{id}',            [ProductsController::class, 'update'])->name('update');
        Route::delete('/delete/{id}',   [ProductsController::class, 'destroy'])->name('destroy');
        Route::post('/',                [ProductsController::class, 'store'])->name('store');
        Route::get('/',                 [ProductsController::class, 'newProductPage'])->name('newProductPage');
        Route::get('/update/{id}',      [ProductsController::class, 'updatePage'])->name('updatePage');
    });

    Route::prefix('/tags')->name('tags.')->group(function () {
        Route::get('/list',             [TagsController::class, 'listPage'])->name('list');
        Route::get('/{id}',             [TagsController::class, 'edit'])->name('edit');
        Route::post('/{id}',            [TagsController::class, 'update'])->name('update');
        Route::delete('/delete/{id}',   [TagsController::class, 'destroy'])->name('destroy');
        Route::post('/',                [TagsController::class, 'store'])->name('store');
        Route::get('/',                 [TagsController::class, 'newTagPage'])->name('newTagPage');
        Route::get('/update/{id}',      [TagsController::class, 'updatePage'])->name('updatePage');
    });
});

Route::middleware('guest')->group(function () {
    Route::get('/login',                [AuthController::class, 'authPage'])->name('login');
    Route::post('/login',               [AuthController::class, 'login'])->name('login_auth');
});
