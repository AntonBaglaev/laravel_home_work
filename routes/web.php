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
    return view('welcome');
});

Route::get('/test', \App\Http\Controllers\TestController::class);
// Route::get('/users', [\App\Http\Controllers\UserController::class, 'showUsers']);
// Route::get('/users', \App\Http\Controllers\UserController::class); // список пользователй
Route::get('/test', [\App\Http\Controllers\SimpleController::class, 'test']);
Route::get('/user', [\App\Http\Controllers\UserController::class, 'index']); // форма добавления
Route::post('/user', [\App\Http\Controllers\UserController::class, 'store'])->name('store-user');
