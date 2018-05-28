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

Route::get('/basicresponse',function(){
    return "this is the response got!!";
});

Route::get('/responsewidheader',function(){
    return response("HEADER RESPONSE",200) -> header('Content-Type','text/html')
    -> header('X-Header-One','Header Value');
});

Route::get('/attachcookie',function(){
    return response("Attached cookie",200)
    ->header("Content-Type","text/html")
    ->withcookie("name","Md Noorshid set in cookie");
});

Route::get("/jsonresponse",function(){
    return response() -> json(["name" => "Md Noorshid" , "profession" => "Software Developer"]);
});
