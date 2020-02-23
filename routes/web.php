<?php

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

Route::get('/sample', 'HomeController@showSample')->name('sample');

Route::get('/mimic', 'HomeController@showMimic')->name('mimic');

Route::get('/user', 'HomeController@showUser')->name('user');

Route::post('/login', 'HomeController@postUser')->name('login');

Route::get('/login_done','HomeController@getUser')->name('login_done');

Route::get('/register', 'HomeController@showRegister')->name('register');

Route::post('/registing', 'HomeController@postNewuser')->name('registing');