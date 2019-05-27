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

//Route::group('middleware'=>['auth']], function(){
	Route::get('/', 'MainController@home');
//});
Route::get('/create', function(){
return view('create');
});

Route::post('/insert', 'MainController@add');
Route::get('/update/{id}', 'MainController@update');
Route::get('/view/{id}', 'MainController@view');
Route::post('/edit/{id}', 'MainController@edit');
Route::get('/delete/{id}', 'MainController@delete');

Auth::routes(); 

//Route::get('/home', 'HomeController@index')=>name('home':)

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
