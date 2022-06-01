<?php

use App\Http\Controllers\BookController;
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
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/user', [App\Http\Controllers\ControllerUser::class, 'index']);

Route::get('/new_user', [App\Http\Controllers\AddUserController::class, 'index']);

Route::get('/new_user_add', [App\Http\Controllers\AddUserController::class, 'store']);

Route::get('/new_book_add', [App\Http\Controllers\BookController::class, 'store']);

Route::get('/book', [App\Http\Controllers\BookController::class, 'index']);

Route::get('/delete_book', [App\Http\Controllers\BookController::class, 'index1']);

Route::get('/edit_book', [App\Http\Controllers\BookController::class, 'index2']);

Route::get("/delete_book/{id}",[BookController::class,"destroy"]);

Route::get("/edit_book/{id}",[BookController::class,"edit"]);

Route::post("/edit_book/{id}",[BookController::class,"update"]);


Route::get('/new_book', function () {
    return view('home.book_add');
});
