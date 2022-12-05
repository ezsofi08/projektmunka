<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Input;


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

Route::get('/not_appear', function () {
    return view('not_appear');
});


Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){

    Route::get('/adminhome',function(){
        return view('/admin/adminhome');
    });

    Route::get('/new_appointment',function(){
        return view('/new_appointment');
    });

    Route::post('/add_new_appointment', [App\Http\Controllers\DoctorsController::class, 'createAppointment']);

    Route::get('/valami',[App\Http\Controllers\NextController::class, 'getdata']);
    Route::post('valami0',[App\Http\Controllers\NextController::class, 'appear']);
    Route::post('getdoc',[App\Http\Controllers\NextController::class, 'getdoc']);
    Route::post('getquestions',[App\Http\Controllers\NextController::class, 'getquestions']);
    Route::post('savedoc',[App\Http\Controllers\NextController::class, 'savedoc']);
    Route::post('medicine',[App\Http\Controllers\NextController::class, 'medicine']);

});
Route::get('admin_booked_appointment',[App\Http\Controllers\AdminBookController::class, 'booked']);



Route::get('/profil_pdf', [App\Http\Controllers\UserController::class, 'profil_pdf'])->name('profil_pdf');
Route::get('/appointment', [App\Http\Controllers\DoctorsController::class, 'index'])->name('doctors');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/screen', [App\Http\Controllers\ScreenController::class, 'getdata'])->name('getdata');
Route::get('/profil', [App\Http\Controllers\UserController::class, 'index'])->name('user');

Route::get('/teszt', [App\Http\Controllers\TesztController::class, 'getapp'])->name('getapp');


//Route::post('teszt0',[App\Http\Controllers\TesztController::class, 'book']);

Route::post('doc',[App\Http\Controllers\TesztController::class, 'doc']);

Route::post('question',[App\Http\Controllers\TesztController::class, 'question']);






