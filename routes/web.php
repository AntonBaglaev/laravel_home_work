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

Route::get('/books', [\App\Http\Controllers\EntityController::class, 'index'])->name('books');
Route::post('/books', [\App\Http\Controllers\EntityController::class, 'store'])->name('save_book');
Route::get('/remove_book/{id?}', [\App\Http\Controllers\EntityController::class, 'delete'])->
where(['id' => '[A-Za-z0-9]+'])->name('remove_book');

Route::get('/upload', [\App\Http\Controllers\FileUploadController::class, 'index']);
Route::post('/upload', [\App\Http\Controllers\FileUploadController::class, 'upload'])->name('upload_file');

Route::get('/library_user/{id}', [\App\Http\Controllers\LibraryUserController::class, 'showUser'])->where(['id' => '[0-1]+']);
