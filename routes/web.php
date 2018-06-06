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
// Route::get('user/{id}', function ($id) {
//     return $id;
// });
// Route::get('user/{id}/{name}', function ($id, $name) {
//     return view('home.index', compact('id','name'));
// });
// Route::get('user/{name?}', function ($name = null) {
//     return $name;
// });
// Route::get('user/{id}/{$name}', function ($id, $name) {
//     return view('home.index', compact('id','name'));
// });
Route::get('/belajar', 'BelajarController@index');
Route::get('/belajar/html', 'BelajarController@getPage');
Route::get('/one-to-one', 'BelajarController@getOne');
Route::get('/profile/{nama}', 'BelajarController@hasOne');
Route::get('/one-to-many', 'BelajarController@getOneMany');
Route::get('/many-to-one', 'BelajarController@getManyOne');
Route::get('/many-to-many/{name?}', 'BelajarController@getManytoMany');
Route::get('/has-many-through/{id?}', 'BelajarController@hasManyThrough');

Route::group(['prefix' => 'kendaraan'], function(){
	Route::get('/', 'KendaraanController@index');
	Route::get('/create', 'KendaraanController@create');
	Route::post('/store', 'KendaraanController@store');
	Route::get('/show/{id}', 'KendaraanController@show');
	Route::post('/update/{id}', 'KendaraanController@update');
	Route::get('/destroy/{id}', 'KendaraanController@destroy');
});

Route::group(['prefix' => 'user'], function(){
	Route::get('/', 'UserController@index');
	Route::get('/create', 'UserController@create');
	Route::post('/process', 'UserController@process');
	Route::get('/show/{id}', 'UserController@show');
	Route::post('/update/{id}', 'UserController@update');
	Route::get('/destroy/{id}', 'UserController@destroy');
});

Route::group(['prefix' => 'kota'], function(){
	Route::get('/', 'KotaController@index');
	Route::get('/create', 'KotaController@create');
	Route::post('/process', 'KotaController@process');
	Route::get('/show/{id}', 'KotaController@show');
	Route::post('/update/{id}', 'KotaController@update');
	Route::get('/destroy/{id}', 'KotaController@destroy');
});