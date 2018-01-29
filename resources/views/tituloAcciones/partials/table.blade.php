<h1 class="text-primary">Título de acciones por accionista: {{ $accionista->razon_social or $accionista->nombre }}</h1>

<table class="table table-bordered" id="MyTable">
	<thead>
		<tr>
			<th class="text-center">Nombre o Razón social</th>
			<th class="text-center">Rut</th>
			<th class="text-center">No. Título</th>
			<th class="text-center">Vigente o Inutilizado</th>
			<th class="text-center">Número de Acciones</th>
			<th class="text-center">Tipo Acciones</th>
			<th class="text-center">Fecha Suscripción o compra</th>
			<th class="text-center">Pagadas o no </th>


		</tr>
	</thead>
	<tbody>
		@foreach($tituloAcciones as $titulo)
		<tr data-id='{{ $titulo->id }}'>
			<td class="text-center">{{ $accionista->razon_social or $accionista->nombre }}</td>
			<td class="text-center">{{ $accionista->rut }}</td>
			<td class="text-center">{{ $titulo->numero_titulo }}</td>
			<td class="text-center">{{ $titulo->vigente_inutilizable }}</td>
			<td class="text-center">{{ $titulo->numero_acciones }}</td>
			<td class="text-center">{{ $titulo->tipo_acciones }}</td>
			<td class="text-center">{{ $titulo->fecha_suscripcion_compra }}</td>
			<td class="text-center">{{ $titulo->pagada_o_no }}</td>
			

			{!! Form::open(['route' => ['tituloAcciones.destroy', ':TITULO_ID'], 'method' => 'DELETE', 'id'=>'form-delete-titulo-acciones']) !!}

			<td class="text-center">
				<a type="submit" class="btn btn-danger btn-xs delete-titulo-accion">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
				<a href="{{ url('/tituloAcciones/'.$titulo->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				</a>
			</td>

			{!! Form::close() !!}

		</tr>
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<th class="text-center">Nombre o Razón social</th>
			<th class="text-center">Rut</th>
			<th class="text-center">No. Título</th>
			<th class="text-center">Vigente o Inutilizado</th>
			<th class="text-center">Número de Acciones</th>
			<th class="text-center">Tipo Acciones</th>
			<th class="text-center">Fecha Suscripción o compra</th>
			<th class="text-center">Pagadas o no </th>
		</tr>
	</tfoot>
</table>
