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

Route::get('/', function () {
    return view('home.index');
});
Route::get('user/{id}', function ($id) {
    return $id;
});
Route::get('user/{id}/{name}', function ($id, $name) {
    return view('home.index', compact('id','name'));
});
Route::get('user/{name?}', function ($name = null) {
    return $name;
});
Route::get('user/{id}/{$name}', function ($id, $name) {
    return view('home.index', compact('id','name'));
});
Route::get('/belajar', 'BelajarController@index');
Route::get('/belajar/html', 'BelajarController@getPage');
Route::get('/one-to-one', 'BelajarController@getOne');
Route::get('/profile/{nama}', 'BelajarController@hasOne');
Route::get('/one-to-many', 'BelajarController@getOneMany');
Route::get('/many-to-one', 'BelajarController@getManyOne');
Route::get('/many-to-many/{name?}', 'BelajarController@getManytoMany');