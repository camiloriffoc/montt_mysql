	<li><a href="{{ url('/sociedades/'.$sociedad->id.'/edit') }}" class="menu-cuentas">Datos Generales</a></li>
	<li><a href="/capital/{{$sociedad->id}}" class="menu-cuentas">Capital Social</a></li>
	<li><a href="{{ url('/acciones',['id' => $sociedad->id]) }}" class="menu-cuentas">Acciones</a></li>
	<li><a href="{{ url('/accionistas',['id' => $sociedad->id]) }}" class="menu-cuentas">Accionistas</a></li>
	<li><a href="{{ url('/registro_accionistas',['id' => $sociedad->id]) }}" class="menu-cuentas">Registro de Accionistas</a></li>
	<li><a href="/directorio/{{$sociedad->id}}/edit" class="menu-cuentas">Directorio</a></li>

	<li><a href="/gerente_representante/{{$sociedad->id}}" class="menu-cuentas">Gerente General</a></li>
	<li><a href="/poderes_apoderados/{{$sociedad->id}}" class="menu-cuentas">{{ str_limit('Listado de Poderes y Apoderados', $limit = 25, $end = '...') }}</a></li>
	<li><a href="/inspectores_cuenta/{{$sociedad->id}}" class="menu-cuentas">Inspectores de Cuenta</a></li>
	<li><a href="/gerente_general/form_gerente_general/" class="menu-cuentas">Gerente General</a></li>
	<li><a href="{{ url('/fiscalizadores/'.$sociedad->id.'/edit') }}" class="menu-cuentas">Fiscalizadores</a></li>
	<li><a href="{{ url('/forma_disolucion_liquidacion',['id' => $sociedad->id]) }}" class="menu-cuentas">{{ str_limit('Forma de disolución y liquidación del haber social', $limit = 25, $end = '...') }}</a></li>
	<li><a href="{{ url('/derecho_retiro/'.$sociedad->id.'/edit') }}" class="menu-cuentas">Derecho a Retiro</a></li> 
	<li><a href="/estatutos_sociales/{{$sociedad->id}}" class="menu-cuentas">Estatuto Sociales</a></li>
	<li><a href="/autorizacion_sectores/{{$sociedad->id}}" class="menu-cuentas">{{str_limit('Autorizaciones sectoriales', $limit = 25, $end = '...') }}</a></li>
	<li><a href="{{ url('/forma_resolucion_conflictos/'.$sociedad->id.'/edit') }}" class="menu-cuentas">{{ str_limit('Forma de resolución entre accionistas', $limit = 25, $end = '...') }}</a></li>
	<li><a href="{{ url('/otros_pactos_especiales/'.$sociedad->id.'/edit') }}" class="menu-cuentas">Otros Pactos Especiales</a></li>
	<li><a href="{{ url('/junta_accionistas/'.$sociedad->id.'/edit') }}" class="menu-cuentas">Junta Accionistas</a></li>
