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

Route::get('accionistas/{id}','AccionistasController@index');
Route::get('accionistas/create/{id}','AccionistasController@create');
Route::resource('accionistas', 'AccionistasController');
Route::get('/home', 'HomeController@index')->name('home');


//directorio
Route::get('/directorio/{id}/edit','DirectorioController@edit');
Route::post('/directorio/store','DirectorioController@store');

//director
Route::get('director/{id}', 'DirectorController@index');
Route::get('director/show/{id}','DirectorController@show');
Route::get('director/edit/{id_directorio}/{id}', 'DirectorController@edit');
Route::post('director', 'DirectorController@store');
Route::post('director/update', 'DirectorController@update');
Route::get('director/delete/{directorio_id}/{id}', 'DirectorController@delete');


//secretario
Route::get('secretario/{id}', 'SecretarioController@index');
Route::post('secretario', 'SecretarioController@store');
Route::get('director/delete/{directorio_id}', 'SecretarioController@delete');
