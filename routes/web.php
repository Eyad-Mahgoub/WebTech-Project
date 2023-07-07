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

Route::get('/', [\App\Http\Controllers\Auth\LoginController::class, 'index'])                           ->name('login');
Route::post('/login', [\App\Http\Controllers\Auth\LoginController::class, 'login'])                     ->name('login.login');
Route::get('/logout', [\App\Http\Controllers\Auth\LoginController::class, 'logout'])                    ->name('login.logout');

Route::get('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'index'])      ->name('register.index');
Route::post('/register', [\App\Http\Controllers\Auth\RegisterController::class, 'register'])  ->name('register.register');

Route::resource('categories', \App\Http\Controllers\Admin\CategoryController::class);
Route::resource('products', \App\Http\Controllers\Admin\ProductController::class);
Route::resource('users', \App\Http\Controllers\Admin\UserController::class);


Route::middleware('auth')->get('/dashboard', [\App\Http\Controllers\Admin\AdminController::class, 'index']) ->name('admin.index');
