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

Route::get('/productos', 'ProductoController@index');

Route::get('/perfil', function(){
  return view('profile');
});

Route::get('/productos/{id}', 'ProductoController@show');




Auth::routes();

// Route::get('/home', 'HomeController@index')->name('home');
