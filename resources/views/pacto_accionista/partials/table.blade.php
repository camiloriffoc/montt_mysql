<h1 class="text-primary">Pacto de accionista: {{ $accionista->razon_social or $accionista->nombre }}</h1>

<table class="table table-bordered" id="MyTable">
	<thead>
		<tr>
			<th class="text-center">Título</th>
			<th class="text-center">Número de Acciones</th>
			<th class="text-center">Fecha Vigencia Pacto</th>
		</tr>
	</thead>
	<tbody>
		@foreach($pactoAccionista as $pacto)
		<tr data-id='{{ $pacto->id }}'>
			<td class="text-center">{{ $pacto->titulo }}</td>
			<td class="text-center">{{ $pacto->numero_acciones }}</td>
			<td class="text-center">{{ $pacto->fecha_vigencia_pacto }}</td>
			

			{!! Form::open(['route' => ['pacto_accionista.destroy', ':PACTO_ID'], 'method' => 'DELETE', 'id'=>'form-delete-pacto-accionista']) !!}

			<td class="text-center">
				<a type="submit" class="btn btn-danger btn-xs delete-pacto-accionista">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
				<a href="{{ url('/pacto_accionista/'.$pacto->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
					<span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
				</a>
			</td>

			{!! Form::close() !!}

		</tr>
		@endforeach
	</tbody>
	<tfoot>
		<tr>
			<th class="text-center">Título</th>
			<th class="text-center">Número de Acciones</th>
			<th class="text-center">Fecha Vigencia Pacto</th>
		</tr>
	</tfoot>
</table>