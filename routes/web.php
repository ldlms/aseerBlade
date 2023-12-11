<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;

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
    return view('acceuil');
});

Route::get('/register',[RegisterController::class,'create'])->name('displayRegister');
Route::post('/register',[RegisterController::class,'store'])->name('register');
Route::get('/login',[LoginController::class,'create'])->name('displayLogin');
Route::post('/login',[LoginController::class,'store'])->name('login');

Route::post('/logout',[LogoutController::class,'destroy'])->name('logout')->middleware('auth');

