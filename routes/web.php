<?php

use App\Http\Controllers\MainController;
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

Route::get('/', [MainController::class, 'index'])->name('home');

Route::group(['prefix' => 'auth', 'namespace' => 'Auth' ,'as' => 'auth.'], function() {
    Route::get('register', [App\Http\Controllers\Auth\RegisterController::class, 'registerationForm'])->name('register.form');
    Route::post('register', [App\Http\Controllers\Auth\RegisterController::class, 'register'])->name('register');
    Route::get('login', [App\Http\Controllers\Auth\LoginController::class, 'loginform'])->name('login.form');
    Route::post('login', [App\Http\Controllers\Auth\LoginController::class, 'login'])->name('login');
    Route::get('logout', function(){
        Illuminate\Support\Facades\Auth::logout();
        return redirect()->route('auth.login.form');
    })->name('logout');
});
