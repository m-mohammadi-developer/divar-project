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


Route::get('/home', 'HomeController@index')->name('home');


Route::group(['prefix' => 'dashboard'], ['middleware' => 'IsAdmin', function () {
    Route::post('/list', 'dashboard\AdversController@list'); // 
    Route::post('/show', 'dashboard\AdversController@show'); // 
    Route::post('/add', 'dashboard\AdversController@add'); // 
    Route::post('/update', 'dashboard\AdversController@update'); // 
    Route::post('/delete', 'dashboard\AdversController@delete'); // 
}]);