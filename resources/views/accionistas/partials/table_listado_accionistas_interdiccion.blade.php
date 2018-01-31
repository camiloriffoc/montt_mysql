<h1 class="text-primary">Listado de accionistas Interdicción</h1>

<table class="table table-bordered" id="table-accionistas-interdiccion">
	<thead>
		<tr>
			<th class="text-center">Nombre Accionistas Interdictos</th>
			<th class="text-center">Título</th>
			<th class="text-center">Número de Acciones</th>
			<th class="text-center">Fecha de Interdicción / Sentencia de Interdicción</th>
			<th class="text-center">Tutor y Curador / Nombre y RUT </th>
		</tr>
	</thead>
	<tbody>
		@foreach($listadoAccionistaInterdiccion as $accionistaInterdiccion)
		<tr data-id='{{ $accionistaInterdiccion->id }}'>
			<td class="text-center">{{  $accionistaInterdiccion->nombre or $accionistaInterdiccion->razon_social }}</td>
			<td class="text-center">{{ $accionistaInterdiccion->interdiccion_titulo}}</td>
			<td class="text-center">{{ $accionistaInterdiccion->interdiccion_numero_acciones }}</td>
			<td class="text-center">{{ $accionistaInterdiccion->interdiccion_fecha_interdiccion }}</td>
			<td class="text-center">{{ $accionistaInterdiccion->interdiccion_tutor_curador }}</td>
		</tr>
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<th class="text-center">Nombre Accionistas Interdictos</th>
			<th class="text-center">Título</th>
			<th class="text-center">Número de Acciones</th>
			<th class="text-center">Fecha de Interdicción / Sentencia de Interdicción</th>
			<th class="text-center">Tutor y Curador / Nombre y RUT </th>
		</tr>
	</tfoot>
</table>