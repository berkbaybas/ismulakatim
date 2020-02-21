<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});


//List interviews
Route::get('mulakatlar', 'InterviewController@index');

//List single interview
Route::get('mulakat/{id}', 'InterviewController@show');

//Create interview
Route::post('mulakat', 'InterviewController@store');

//Edit interview
Route::put('mulakat', 'InterviewController@store');

//Delete interview
Route::delete('mulakat', 'InterviewController@destroy');