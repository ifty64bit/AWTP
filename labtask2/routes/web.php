<?php

use App\Http\Controllers\UserController;
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

Route::get('/contact', function(){
    return view('contact');
})->name('contact');

Route::controller(UserController::class)->group(function(){
    Route::get('/login','getLogin')->name('login');
    Route::post('/login','login')->name('postLogin');

    Route::get('/registration','getRegistration')->name('registration');
    Route::post('/registration', 'registration')->name('postRegistration');
});
