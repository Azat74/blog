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




Route::group(['middleware'=>['auth']], function(){

//    Route::get('/', function () {
//        return view('welcome');
//    });
    Route::get('/note/create', 'PostController@create');
    Route::post('/', 'PostController@store');
    Route::get('/note/{id}/edit/', 'PostController@edit');
    Route::put('/note/{id}', 'PostController@update');
    Route::delete('/note/{id}', 'PostController@destroy');

    Route::get('/home', 'HomeController@index');
});

Route::get('/', 'PostController@index');

Auth::routes();




Route::get('/note/{id}', 'PostController@note')->name('note');


//Route::get('/download', 'PostController@download')->name('download');
