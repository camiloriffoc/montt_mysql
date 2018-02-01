<h1 class="text-primary">SubPacto de accionista: {{ $accionista->razon_social or $accionista->nombre }}</h1>

<table class="table table-bordered" id="MyTable">
	<thead>
		<tr>
			<th class="text-center">Título</th>
			<th class="text-center">Número de Acciones</th>
			<th class="text-center">% del Subpacto</th>
			<th class="text-center">Fecha Vigencia subPacto</th>
		</tr>
	</thead>
	<tbody>
		@foreach($subpactoAccionista as $subpacto)
		<tr data-id='{{ $subpacto->id }}'>
			<td class="text-center">{{ $subpacto->titulo }}</td>
			<td class="text-center">{{ $subpacto->numero_acciones }}</td>
			<td class="text-center">{{ $subpacto->porcentaje_subpacto }}</td>
			<td class="text-center">{{ $subpacto->fecha_vigencia_subpacto }}</td>
			

			{!! Form::open(['route' => ['subpacto_accionista.destroy', ':SUBPACTO_ID'], 'method' => 'DELETE', 'id'=>'form-delete-subpacto-accionista']) !!}

			<td class="text-center">
				<a type="submit" class="btn btn-danger btn-xs delete-subpacto-accionista">
					<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
				</a>
				<a href="{{ url('/subpacto_accionista/'.$subpacto->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
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
			<th class="text-center">% del Subpacto</th>
			<th class="text-center">Fecha Vigencia Pacto</th>
		</tr>
	</tfoot>
</table>