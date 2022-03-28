<?php

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
    return view('auth.login');
});

Auth::routes();

Route::get('', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('master', App\Http\Controllers\HomeController::class);

Route::resource('menu', App\Http\Controllers\RoomController::class);

Route::resource('boking', App\Http\Controllers\Roomstatus::class);

Route::resource('form', App\Http\Controllers\FacilityRoomController::class);

Route::resource('kamar', App\Http\Controllers\kamar::class);

Route::resource('fashot', App\Http\Controllers\fashot::class);

Route::resource('fasilitas', App\Http\Controllers\FacilityController::class);

Route::resource('faskam', App\Http\Controllers\faskam::class);

Route::resource('resepsionis', App\Http\Controllers\resepsionis::class);

Route::resource('landing', App\http\Controllers\landing::class);

Route::resource('admin', App\Http\Controllers\admin::class);


