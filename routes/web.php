<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

//Route::get('/', function () {
//    return view('welcome');
//});




Route::group(['middleware'=>'auth'], function(){

//    Route::get('/', function () {
//        return view('welcome');
//    });
    Route::get('/note/create', 'PostController@create');




    Route::get('/home', 'HomeController@index');
});
Route::post('/', 'PostController@store');
Route::get('/', 'PostController@index');

Auth::routes();

Route::get('/test', function () {
    $user = Auth::user();
    echo $user;
});

Route::get('/note/{id}', 'PostController@note');
Route::get('/note/{id}', 'PostController@note');






