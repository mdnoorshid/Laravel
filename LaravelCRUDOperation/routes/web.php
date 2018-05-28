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

Route::get('/',['as' => 'home','uses' => 'EmpoyeeController@index']);

Route::get('/insert','EmpoyeeController@insertForm');
Route::post('/create','EmpoyeeController@insertData');
Route::get('/update/{id}','EmpoyeeController@update');
Route::get('/updatepage/{id}/{name}','EmpoyeeController@viewUpdate');
Route::get('/deletepage','EmpoyeeController@deleteView');
Route::get('/delete/{id}','EmpoyeeController@deleteRecord');