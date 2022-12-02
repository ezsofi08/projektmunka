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


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/adminhome',function(){
        return view('/admin/adminhome');
    });

    Route::get('/new_appointment',function(){
        return view('/new_appointment');
    });



    Route::get('/valami',[App\Http\Controllers\NextController::class, 'getdata'])->name('getdata');

    Route::post('valami0',[App\Http\Controllers\NextController::class, 'appear']);

    Route::post('savedoc',[App\Http\Controllers\NextController::class, 'savedoc']);

  


});




Route::get('/profil_pdf', [App\Http\Controllers\UserController::class, 'profil_pdf'])->name('profil_pdf');
Route::get('/appointment', [App\Http\Controllers\DoctorsController::class, 'index'])->name('doctors');


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/profil', [App\Http\Controllers\UserController::class, 'index'])->name('user');



