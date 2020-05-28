<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/
Route::controllers([
    'auth' 		=> 'Auth\AuthController',
    'password' 	=> 'Auth\PasswordController',
]);
Route::get('/', 'ContactsController@index');
Route::get('/home', 'ContactsController@index');
Route::get('/contacts', 'ContactsController@index'); // List
Route::get('/contacts/add', 'ContactsController@add'); // Add Package
Route::post('/contacts/create', 'ContactsController@create');
Route::get('/contacts/edit/{id}', 'ContactsController@edit'); // Update Package
Route::post('/contacts/update/{id}', 'ContactsController@update');
Route::get('/contacts/delete/{id}', 'ContactsController@delete'); // Delete
