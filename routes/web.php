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

Route::get('/faq', function(){
  return view('faq');
});

Route::get('/contacto', function(){
  return view('contacto');
});

Route::get('/carrito/{id}','ProductoController@showCompra');

// RUTAS DE PRODUCTOS

Route::get('/productos', 'ProductoController@index');

Route::get('/productos/add', 'ProductoController@create');
Route::post('/productos/add', 'ProductoController@store');

Route::get('/productos/{id}', 'ProductoController@show');
Route::get('/productos/{id}/edit', 'ProductoController@edit');

Route::patch('/productos/{id}/edit', 'ProductoController@update');

Route::delete('/productos/{id}', 'ProductoController@destroy');

Route::post('productos', 'ProductoController@search');
//RUTAS DE USUARIOS

Auth::routes();

Route::get('/profile/{id}', 'UserController@show');
Route::get('/profile/{id}/editprofile', 'UserController@edit');

Route::patch('/profile/{id}/editprofile', 'UserController@update');



// Route::get('/home', 'HomeController@index')->name('home');
