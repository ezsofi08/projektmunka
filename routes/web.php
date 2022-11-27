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
    return view('welcome');
});

Route::get('/adminlogin', function () {
    return view('adminlogin');
});

Route::get('/doctors', function () {
    return view('doctors');
});

Route::get('/fotok', function () {
    return view('fotok');
});

Route::get('/contact', function () {
    return view('contact');
});






Route::get('/appointment', [App\Http\Controllers\DoctorsController::class, 'index'])->name('doctors');



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profil', [App\Http\Controllers\UserController::class, 'index'])->name('user');
