<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{AdminController, ListPenggunaController, ListLembagaController};

use Illuminate\Support\Facades\Auth;

/*
|----------------------------------------------------------------------
| Web Routes
|----------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// laravel

Route::get('/welcome', function () {
    return view('welcome');
});

// login

Route::get('/login', function () {
    return view('login.login');
})->middleware('guest')->name('login');//->name('login');

// dashboard

// Route::get('/admin', function () {
//     return view('admin.index');
// });

Route::get('/admin', [AdminController::class, 'home'])->name('home')->middleware('admin');


// list pengguna

Route::get('admin/list-pengguna', [ListPenggunaController::class, 'index'])->name('index')->middleware('admin');
Route::post('admin/list-pengguna/data', [ListPenggunaController::class, 'data'])->middleware('admin');

// list lembaga

Route::get('admin/list-lembaga', [ListLembagaController::class, 'index'])->name('index')->middleware('admin');
Route::post('admin/list-lembaga/data', [ListLembagaController::class, 'data'])->middleware('admin');

// card

Route::get('/admin/card', function () {
    return view('admin.card');
});