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
    return view('home');
});

Route::get('/sirketler', function () {
    return view('company_interview');
});

Route::get('/mulakatekle', function () {
    return view('add_interview');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
