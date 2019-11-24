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


//RUTAS DE USUARIOS

Auth::routes();
//PROBLEMAS ACA, ME TIRA ERROR ROUTE PROFILE NOT DEFINED
Route::get('/profile', 'UserController@rerouteToProfile');
Route::get('/profile/{id}', 'UserController@show');

// Route::get('/home', 'HomeController@index')->name('home');
