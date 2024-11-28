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

//Route::get('/', function () {
//    $data = [
//        'name' => 'Anton',
//        'age' => 39,
//        'position' => 'developer and QA',
//        'address' => 'Moscow'
//    ];
//    return view('home', $data);
//});

Route::get('/contacts', function () {
    $data = [
        'address' => 'Mira Pr',
        'post_code' => 101000,
        'email' => 'gmail@gmail.com',
        'phone' => '12345678910'
    ];
    return view('contacts', $data);
});

Route::get('/main', function () {
    return view('mainpage');
});

Route::get('/about', function () {
    return view('about');
});

Route::get('/users_list', function () {
    $users = ['Ivan', 'Petr', 'Nikolay', 'Vasiliy', 'Oleg'];
    return view('newusers', ['userlist' => $users]);
});

Route::get('/uppercase', function () {
    return view('testdir');
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

Route::get('/my_user', [\App\Http\Controllers\MyUserController::class, 'showUser']);

Route::get('/redirect_test', \App\Http\Controllers\TestRedirectController::class);

Route::get('/send_file', \App\Http\Controllers\SendFileController::class);

Route::get('/userform', [\App\Http\Controllers\FormProcessorController::class, 'index']);
Route::post('/store_form', [\App\Http\Controllers\FormProcessorController::class, 'store']);
Route::get('/hello/{first_name}', [\App\Http\Controllers\FormProcessorController::class, 'hello'])->name('hello');
Route::get('/test_database', \App\Http\Controllers\EmployeeController::class);

Route::get('/test_parameters', [\App\Http\Controllers\RequestTestController::class, 'testRequest']);
Route::get('/test_header', [\App\Http\Controllers\TestHeaderController::class, 'getHeader']);
Route::get('/test_cookie', [\App\Http\Controllers\TestCookieController::class, 'TestCookie']);
