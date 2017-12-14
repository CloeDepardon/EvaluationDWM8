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

Route::get('/', 'BaseController@index');

Route::get('/gestion', 'BaseController@gestion');

Route::get('/insertTheiere', 'TheiereController@index');
Route::get('/insertThe', 'TheController@index');

Route::get('/theiere/update/{id}', 'TheiereController@updateOne');
Route::get('/the/update/{id}', 'TheController@updateOne');

Route::post('/theiere/insert', 'TheiereController@insertOne');
Route::post('/the/insert', 'TheController@insertOne');

Route::post('/theiere/update', 'TheiereController@updateOneAction');
Route::post('/the/update', 'TheController@updateOneAction');


Route::get('/theiere/delete/{id}', 'TheiereController@deleteOne');
Route::get('/the/delete/{id}', 'TheController@deleteOne');
