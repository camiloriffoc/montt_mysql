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
     return view('auth.login');
});

Route::get('admin','AdminController@index');

Auth::routes();
Route::resource('sociedades', 'SociedadesController');

//Rutas para accionistas
Route::get('accionistas/{id}','AccionistasController@index');
Route::get('accionistas/create/{id}','AccionistasController@create');
Route::post('accionistas/{id}','AccionistasController@destroy');
Route::resource('accionistas', 'AccionistasController');


//Rutas para acciones
Route::get('acciones/{id}','AccionesController@index');
Route::get('acciones/create/{id}','AccionesController@create');
Route::post('acciones/{id}','AccionesController@destroy');
Route::resource('acciones', 'AccionesController');


Route::get('/home', 'HomeController@index')->name('home');
