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

Route::post('/home/create', 'HomeController@addEmployee')->name('create');
Route::get('/home/createform', 'HomeController@addForm') ->name('addform');
Route::get('/updatepage/{id}/{name}','HomeController@updateForm')->name('updateform');
Route::post('/update','HomeController@updateEmployee')->name('updateemployee');
Route::get('/deletepage/{id}','HomeController@deleteView')->name('deletview');
Route::post('/delete','HomeController@deleteRecord')->name('deleterecord');


Auth::routes();


