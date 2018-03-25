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


Route::get('/', 'UserGameController@index');
//Adding a new game
Route::get('/create', 'GameController@create');
Route::post('/create', 'GameController@store');

Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
//Registering a new user
Route::get('/registration', 'RegistrationController@create');
Route::post('/registration', 'RegistrationController@store');
//Login  - LogOut
Route::get('/login', 'SessionsController@create');
Route::post('/login', 'SessionsController@store');
Route::get('/logout', 'SessionsController@destroy');
//Creating roles
Route::get('/roles', 'RoleController@create');
Route::post('/roles', 'RoleController@store');
//view if the user profile
Route::get('/userProfile', 'UserController@view');
//buying a game
Route::get('/view', 'UserController@view');

Route::get('/viewGame/{id}', 'UserGameController@view');
Route::post('/buy/{id}', 'UserGameController@buy');


