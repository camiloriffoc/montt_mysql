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
Route::group(['middleware' => ['web']], function () {
Route::get('/', function () {
	return view('auth.login');
});

Route::get('lang/{lang}', function ($lang) {
	session(['lang' => $lang]);
	return \Redirect::back();
})->where([
	'lang' => 'en|es'
]);

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

//Rutas para autorizaciones sectores regulados
Route::get('autorizacion_sectores/{sociedad_id}','AutorizacionController@index');
Route::post('autorizacion_sectores/store','AutorizacionController@store');
Route::get('autorizacion_sectores/edit/{id}','AutorizacionController@edit');
Route::post('autorizacion_sectores/update', 'AutorizacionController@update');
Route::get('autorizacion_sectores/delete/{id}','AutorizacionController@delete');

//Rutas para capital social
Route::get('capital/{id}','CapitalController@index');
Route::post('capital/','CapitalController@store');

//Rutas para estatutos sociales
Route::get('estatutos_sociales/{sociedad_id}','EstatutoSocialController@index');
//Rutas estatutos generales
Route::post('estatutos_sociales/generales','EstatutoSocialController@generalesStore');
Route::get('estatutos_sociales/generales/edit/{id}','EstatutoSocialController@generalesEdit');
Route::get('estatutos_sociales/generales/delete/{id}','EstatutoSocialController@generalesDelete');
Route::post('estatutos_sociales/generales/update','EstatutoSocialController@generalesUpdate');
//Rutas estatutos especiales

Route::post('estatutos_sociales/especiales','EstatutoSocialController@especialesStore');
Route::get('estatutos_sociales/especiales/edit/{id}','EstatutoSocialController@especialesEdit');
Route::get('estatutos_sociales/especiales/delete/{id}','EstatutoSocialController@especialesDelete');
Route::post('estatutos_sociales/especiales/update','EstatutoSocialController@especialesUpdate');

//capital suscripcion
Route::post('capital/suscripcion','CapitalController@suscripcionStore');
Route::get('capital/suscripcion/edit/{id}','CapitalController@suscripcionEdit');
Route::post('capital/suscripcion/update','CapitalController@suscripcionUpdate');
//capital pago
Route::post('capital/pago','CapitalController@pagoStore');
Route::get('capital/pago/edit/{id}','CapitalController@pagoEdit');
Route::post('capital/pago/update','CapitalController@pagoUpdate');

//Rutas Gerentes Generales o Representantes
Route::get('gerente_representante/delete/{id}','GerenteRepresentanteController@delete');
Route::get('gerente_representante/{sociedad_id}','GerenteRepresentanteController@index');
Route::get('gerente_representante/create/{sociedad_id}', 'GerenteRepresentanteController@create');
Route::post('gerente_representante/update','GerenteRepresentanteController@update');
Route::get('gerente_representante/edit/{id}','GerenteRepresentanteController@edit');
Route::post('gerente_representante/store','GerenteRepresentanteController@store');

//Rutas InspectoresCuenta
Route::get('inspectores_cuenta/{sociedad_id}','InspectoresCuentaController@index');
Route::post('inspectores_cuenta/update','InspectoresCuentaController@update');
Route::post('inspectores_cuenta/inspector/update','InspectoresCuentaController@inspectorUpdate');


//Rutas PoderesApoderados 
Route::get('poderes_apoderados/{sociedad_id}','PoderesApoderadosController@index');
Route::get('poderes_apoderados/create/{sociedad_id}','PoderesApoderadosController@create');
Route::post('poderes_apoderados/store', 'PoderesApoderadosController@store');
Route::get('poderes_apoderados/delete/{poder_id}', 'PoderesApoderadosController@delete');
Route::get('poderes_apoderados/edit/{poder_id}', 'PoderesApoderadosController@edit');
Route::post('poderes_apoderados/update', 'PoderesApoderadosController@update');


//Rutas Porcentaje Accioniones para accionista
Route::get('porcentajeAccionesAccionista/{id}','PorcentajeAccionesAccionistaController@index');
Route::post('porcentajeAccionesAccionista/{id}','PorcentajeAccionesAccionistaController@destroy');
Route::resource('porcentajeAccionesAccionista', 'PorcentajeAccionesAccionistaController');

//Rutas Folio Registro de Accionistas
Route::get('folioRegistroAccionista/{id}','FolioRegistroAccionistaController@index');
Route::post('folioRegistroAccionista/{id}','FolioRegistroAccionistaController@destroy');
Route::resource('folioRegistroAccionista', 'FolioRegistroAccionistaController');

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
Route::get('director/delete/{id}', 'DirectorController@delete');

//directorio
Route::get('/directorio/{id}/edit','DirectorioController@edit');
Route::post('/directorio/store','DirectorioController@store');

//Rutas para sucursales
Route::get('sucursales/{id}','SucursalsController@index');
Route::get('sucursales/create/{id}','SucursalsController@create');
Route::post('sucursales/{id}','SucursalsController@destroy');
Route::resource('sucursales', 'SucursalsController');

//Rutas para giros
Route::get('giros/{id}','GirosController@index');
Route::get('giros/create/{id}','GirosController@create');
Route::post('giros/{id}','GirosController@destroy');
Route::resource('giros', 'GirosController');


//Rutas para secretario
Route::get('secretario/{id}', 'SecretarioController@index');
Route::post('secretario', 'SecretarioController@store');
Route::get('secretario/delete/{directorio_id}', 'SecretarioController@delete');

//Rutas para Fiscalizadores
Route::post('/fiscalizadores/{id}','FiscalizadoresController@update');
Route::resource('fiscalizadores', 'FiscalizadoresController');

//Rutas Pacto Accionistas
Route::get('pacto_accionista/{id}','PactosController@index');
Route::post('pacto_accionista/{id}','PactosController@destroy');
Route::resource('pacto_accionista', 'PactosController');

//Rutas Composición Accionaria
Route::get('composicionAccionaria/{id}', 'ComposicionAccionariaController@index');

//Rutas Listado de accionista Capital
Route::get('listado_capital/{id}','ListadoAccionistaCapitalController@index');
Route::post('listado_capital/{id}','ListadoAccionistaCapitalController@destroy');
Route::resource('listado_capital', 'ListadoAccionistaCapitalController');

//Rutas Listado de accionista Con derecho a Voto
Route::get('listado_voto/{id}','ListadoAccionistaVotoController@index');
Route::post('listado_voto/{id}','ListadoAccionistaVotoController@destroy');
Route::resource('listado_voto', 'ListadoAccionistaVotoController');

//Rutas Listado de accionista Con derecho a Dividendo
Route::get('listado_dividendo/{id}','ListadoAccionistaDividendoController@index');
Route::post('listado_dividendo/{id}','ListadoAccionistaDividendoController@destroy');
Route::resource('listado_dividendo', 'ListadoAccionistaDividendoController');

//Rutas Listado de opciones
Route::get('listado_opciones/{id}','ListadoOpcionesController@index');
Route::post('listado_opciones/{id}','ListadoOpcionesController@destroy');
Route::resource('listado_opciones', 'ListadoOpcionesController');

//Rutas SubPacto Accionistas
Route::get('subpacto_accionista/{id}','SubPactosController@index');
Route::post('subpacto_accionista/{id}','SubPactosController@destroy');
Route::resource('subpacto_accionista', 'SubPactosController');

//Rutas Registro de accionista
Route::get('registro_accionistas/{id}','RegistroAccionistaController@index');
Route::resource('registro_accionistas', 'RegistroAccionistaController');

//Rutas para Derecho a Retiro
Route::post('/derecho_retiro/{id}','DerechoRetiroController@update');
Route::resource('derecho_retiro', 'DerechoRetiroController');

//Rutas Forma de resolución de conflictos
Route::post('forma_resolucion_conflictos/{id}','FormaResolucionConflictosController@update');
Route::resource('forma_resolucion_conflictos', 'FormaResolucionConflictosController');

//Rutas Forma de disolución y liquidacion del haber
Route::get('forma_disolucion_liquidacion/{id}','FormaDisolucionLiquidacionController@index');
Route::resource('forma_disolucion_liquidacion', 'FormaDisolucionLiquidacionController');

//Rutas Otros pactos especiales
Route::post('otros_pactos_especiales/{id}','OtrosPactosEspecialesController@update');
Route::resource('otros_pactos_especiales', 'OtrosPactosEspecialesController');

//Rutas Otros pactos especiales
Route::post('junta_accionistas/{id}','JuntaAccionistaController@update');
Route::resource('junta_accionistas', 'JuntaAccionistaController');

Route::get('/home', 'HomeController@index')->name('home');

});
