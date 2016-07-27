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

Route::get('/', [
    'uses' => 'HomeController@index',
    'as' => 'home'
]);

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/store/create', [
    'uses' => 'StoresController@show',
    'as'   => 'stores.create'
]);

Route::post('/store/create', [
    'uses' => 'StoresController@store',
]);

Route::get('/store/{username}', [
    'uses' => 'StoresController@find',
    'as'   => 'stores.show'
]);
