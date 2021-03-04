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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');



Route::resource('advers', 'Dasboard\AdversController');



Route::get('/dashboard/', "Dashboard\DashboardController@index")->middleware('admin');
Route::get('/dashboard/categories', "Dashboard\DashboardController@categories")->middleware('admin');
Route::get('/dashboard/users', "Dashboard\DashboardController@users")->middleware('admin');
Route::get('/dashboard/adverses', "Dashboard\AdversController@index")->middleware('admin');
Route::get('/dashboard/contacts', "Dashboard\DashboardController@contacts")->middleware('admin');


Route::get('/admin/advers', function () {
    $page = 'advers';
    return view('dashboard.main', compact('page'));
});