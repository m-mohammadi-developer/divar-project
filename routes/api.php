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



Route::group(['prefix' => 'advers'], function () {
    Route::post('/list', 'AdversController@list'); // Ok
    Route::post('/show', 'AdversController@showForApi'); // Ok
    Route::post('/add', 'AdversController@add'); // Ok
    Route::post('/update', 'AdversController@updateForApi'); // Ok
    Route::post('/delete', 'AdversController@deleteForApi'); // Ok
});
