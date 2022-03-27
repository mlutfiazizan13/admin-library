<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\RegisterController;
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
    return redirect('login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'customLogin'])->name('login.custom');
Route::get('signout', [LoginController::class, 'signOut'])->name('signout');


Route::get('register', [RegisterController::class, 'index'])->name('register-user');
Route::post('register', [RegisterController::class, 'customRegistration'])->name('register.custom');

Route::get('dashboard', [LoginController::class, 'dashboard'])->name('dashboard');

Route::resource('books', BookController::class);

// Route::get('book', [BookController::class, 'index'])->name('index.book');
// Route::get('bookcreate', [BookController::class, 'createForm'])->name('create.form.book');
// Route::post('book/create', [BookController::class, 'store'])->name('create.book');


// Route::get('updatebook/{id}', [BookController::class, 'update']);
