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
    Route::post('/list', 'Api\AdversController@list'); // Ok
    Route::post('/show', 'Api\AdversController@show'); // Ok
    Route::post('/add', 'Api\AdversController@add'); // Ok
    Route::post('/update', 'Api\AdversController@update'); // Ok
    Route::post('/delete', 'Api\AdversController@delete'); // Ok
});
