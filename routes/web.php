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


//Rutas para capital social
Route::get('capital/{id}','CapitalController@index');
Route::post('capital/','CapitalController@store');
//capital suscripcion
Route::post('capital/suscripcion','CapitalController@suscripcionStore');
Route::get('capital/suscripcion/edit/{id}','CapitalController@suscripcionEdit');
Route::post('capital/suscripcion/update','CapitalController@suscripcionUpdate');
//capital pago
Route::post('capital/pago','CapitalController@pagoStore');
Route::get('capital/pago/edit/{id}','CapitalController@pagoEdit');
Route::post('capital/pago/update','CapitalController@pagoUpdate');

//Rutas Porcentaje Accioniones para accionista
Route::get('porcentajeAccionesAccionista/{id}','PorcentajeAccionesAccionistaController@index');
Route::post('porcentajeAccionesAccionista/{id}','PorcentajeAccionesAccionistaController@destroy');
Route::resource('porcentajeAccionesAccionista', 'PorcentajeAccionesAccionistaController');

//Rutas titulos de acciones
Route::get('tituloAcciones/{id}','TituloAccionesController@index');
Route::post('tituloAcciones/{id}','TituloAccionesController@destroy');
Route::resource('tituloAcciones', 'TituloAccionesController');

Route::get('/home', 'HomeController@index')->name('home');




//Rutas para director
Route::get('director/{id}', 'DirectorController@index');
Route::get('director/show/{id}','DirectorController@show');
Route::get('director/edit/{id_directorio}/{id}', 'DirectorController@edit');
Route::post('director', 'DirectorController@store');
Route::post('director/update', 'DirectorController@update');
Route::get('director/delete/{directorio_id}/{id}', 'DirectorController@delete');

//directorio
Route::get('/directorio/{id}/edit','DirectorioController@edit');
Route::post('/directorio/store','DirectorioController@store');

//Rutas para sucursales
Route::get('sucursales/{id}','SucursalsController@index');
Route::get('sucursales/create/{id}','SucursalsController@create');
Route::post('sucursales/{id}','SucursalsController@destroy');
Route::resource('sucursales', 'SucursalsController');


//Rutas para secretario
Route::get('secretario/{id}', 'SecretarioController@index');
Route::post('secretario', 'SecretarioController@store');
Route::get('secretario/delete/{directorio_id}', 'SecretarioController@delete');

//Rutas para Fiscalizadores
Route::post('/fiscalizadores/{id}','FiscalizadoresController@update');
//Route::get('/fiscalizadores/{id}/edit','CapitalController@edit');
Route::resource('fiscalizadores', 'FiscalizadoresController');

Route::get('/home', 'HomeController@index')->name('home');


