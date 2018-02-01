<h1 class="text-primary">Títulos de acciones</h1>

<table class="table table-bordered" id="table-porcentaje-accionistas">
	<thead>
		<tr>
			<th class="text-center">Nombre o Razón social Accionistas</th>
			<th class="text-center">Rut</th>
			<th class="text-center">No. Título</th>
			<th class="text-center">Vigente o Inutilizado</th>
			<th class="text-center">Número de Acciones</th>
			<th class="text-center">Tipo Acciones</th>
			<th class="text-center">Fecha Suscripción o compra</th>
			<th class="text-center">Pagadas o no </th>
			<th class="text-center">Archivo adjunto Título</th>
			<th class="text-center">Documento de respaldo Compraventa o Suscripción</th>
		</tr>
	</thead>
	<tbody>
		@foreach($titulosDeAcciones as $titulo)
		<tr data-id='{{ $titulo->id }}'>
			<td class="text-center">{{	$titulo->nombre or $titulo->razon_social }}</td>
			<td class="text-center">{{ $titulo->rut}}</td>
			<td class="text-center">{{ $titulo->numero_titulo }}</td>
			<td class="text-center">{{ $titulo->vigente_inutilizable }}</td>
			<td class="text-center">{{ $titulo->numero_acciones }}</td>
			<td class="text-center">{{ $titulo->tipo_acciones }}</td>
			<td class="text-center">{{ $titulo->fecha_suscripcion_compra }}</td>
			<td class="text-center">{{ $titulo->pagada_o_no }}</td>
			<td class="text-center">Adjunto</td>
			<td class="text-center">Adjunto</td>

		</tr>
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<th class="text-center">Nombre o Razón social Accionistas</th>
			<th class="text-center">Rut</th>
			<th class="text-center">No. Título</th>
			<th class="text-center">Vigente o Inutilizado</th>
			<th class="text-center">Número de Acciones</th>
			<th class="text-center">Tipo Acciones</th>
			<th class="text-center">Fecha Suscripción o compra</th>
			<th class="text-center">Pagadas o no </th>
			<th class="text-center">Archivo adjunto Título</th>
			<th class="text-center">Documento de respaldo Compraventa o Suscripción</th>
		</tr>
	</tfoot>
</table>