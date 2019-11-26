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
    return view('home');
});
// RUTAS DE PRODUCTOS

Route::get('/productos', 'ProductoController@index');


Route::get('/productos/{id}', 'ProductoController@show');
Route::get('/productos/{id}/edit', 'ProductoController@edit');

Route::get('/productos/add', 'ProductoController@create');
Route::post('/productos/add', 'ProductoController@store');

Route::patch('/productos/{id}/edit', 'ProductoController@update');

Route::delete('/productos/{id}', 'ProductoController@destroy');
//RUTAS DE USUARIOS

Auth::routes();

Route::get('/profile/{id}', 'UserController@show');
Route::get('/profile/{id}/editprofile', 'UserController@edit');

Route::patch('/profile/{id}/editprofile', 'UserController@update');



// Route::get('/home', 'HomeController@index')->name('home');
