<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', function () {
    return redirect('login');
})->middleware('ceklogin');

// Auth::routes();
// Route::get('login',[LoginController::class,'index'])->name('login')->middleware('ceklogin');
// Route::post('login',[LoginController::class,'login'])->name('postlogin');
// Route::post('logout',[loginController::class,'logout'])->name('logout');
Auth::routes();

Route::get('/', function () {
    return view('welcome');
})->middleware('guest');
// Route::get('/welcome', [HomeController::class, 'home'])->name('home');

// Route::get('register',[RegisterController::class,'index'])->name('register')->middleware('ceklogin');
// Route::post('login',[LoginController::class,'login'])->name('postlogin');
// Route::post('logout',[loginController::class,'logout'])->name('logout');