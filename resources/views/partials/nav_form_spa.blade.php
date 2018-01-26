	<li><a href="{{ url('/sociedades/'.$sociedad->id.'/edit') }}">Datos Generales</a></li>
	<li><a href="/capital_social/form_capital_social/" class="menu-cuentas">Capital Social</a></li>
	<li><a href="/acciones/form_acciones/" class="menu-cuentas">Acciones</a></li>
	<li><a href="{{ url('/accionistas',['id' => $sociedad->id]) }}" >Accionistas</a></li>
	<li><a href="/registro_acciones/" class="menu-cuentas">Registro de Accionistas</a></li>
	<li><a href="/directorio/" class="menu-cuentas">Directorio</a></li>
	<li><a href="/gerente_general/form_gerente_general/" class="menu-cuentas">Gerente General</a></li>
	<li><a href="/poderes_apoderados/form_list_poderes/" class="menu-cuentas">{{ str_limit('Listado de Poderes y Apoderados', $limit = 25, $end = '...') }}</a></li>
	<li><a href="/form_fiscalizadores/" class="menu-cuentas">Fiscalizadores</a></li>
	<li><a href="/form_inspectores_cuenta/" class="menu-cuentas">Inspectores de Cuenta</a></li>
	<li><a href="/formas_disolucion/form_disolucion_liq_haber_social/" class="menu-cuentas">{{ str_limit('Forma de disolución y Liq. haber social', $limit = 25, $end = '...') }}</a></li>
	<li><a href="/formas_disolucion/form_conflicto_accionistas/" class="menu-cuentas">{{ str_limit('Forma de resolución entre accionistas', $limit = 25, $end = '...') }}</a></li>
	<li><a href="/pactos_especiales/" class="menu-cuentas">Otros Pactos Especiales</a></li>
	<li><a href="/junta_accionistas/form_junta_accionista/" class="menu-cuentas">Junta de Accionistas</a></li>
	<li><a href="/derecho_retiro/form_derecho_retiro/" class="menu-cuentas">Derecho a Retiro</a></li>
	<li><a href="/estatuto/" class="menu-cuentas">Estatuto Sociales</a></li>
	<li><a href="/sectores/form_sectores_regulados/" class="menu-cuentas">{{ str_limit('Autorizaciones sectoriales', $limit = 25, $end = '...') }}</a></li>
