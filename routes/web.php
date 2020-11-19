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
Route::get('/',function(){
    $body = 'body-home dark-theme';
    return view('home-page')->with('body',$body);
})->name('home');


Route::get('/register', 'App\Http\Controllers\AuthController@register_page')->name('register');
Route::post('/register/submit', 'App\Http\Controllers\AuthController@submit_register');


Route::get('/login', 'App\Http\Controllers\AuthController@login_page')->name('login');
Route::post('/login/submit', 'App\Http\Controllers\AuthController@submit_login');


