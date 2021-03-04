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



// Route::get('/dashboard/', "Dashboard\DashboardController@index")->middleware('admin');
// Route::get('/dashboard/categories', "Dashboard\DashboardController@categories")->middleware('admin');
// Route::get('/dashboard/users', "Dashboard\DashboardController@users")->middleware('admin');
// Route::get('/dashboard/adverses', "Dashboard\AdversController@index")->middleware('admin');
// Route::get('/dashboard/contacts', "Dashboard\DashboardController@contacts")->middleware('admin');


// getting users
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('dashboard', function () {
    $page = 'home';
    return view('dashboard.main', compact('page'));
});
/*********************************** User Routes  /************************************/
Route::get('/dashboard/users', 'Dashboard\UserController@index')->name('dashboard.users')->middleware('admin');
Route::get('/dashboard/users/edit/{id}', 'Dashboard\UserController@edit')->name('dashboard.users.edit')->middleware('admin');
Route::post('/dashboard/users/update/{id}', 'Dashboard\UserController@update')->name('dashboard.users.update')->middleware('admin');
Route::get('/dashboard/users/delete/{id}', 'Dashboard\UserController@destroy')->name('dashboard.users.delete')->middleware('admin');

