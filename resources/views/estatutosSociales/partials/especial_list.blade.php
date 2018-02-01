<div class="col-md-12">
	<h2>Régimen Especial</h2>

	<div class="table-responsive col-sm-12">          
		<table class="table">
			<thead>
				<tr>
					<th>Tipo</th>
					<th>No. Solicitud Registro Electrónico</th>
					<th>Fecha Registro Electrónico</th>
					<th>Informado al SII</th>
					<th>Informado al Banco</th>
					<th>Observaciones</th>
					<th>Texto Refundido</th>
					<th>Adjunto Texto Refundido</th>
					<th>Adjunto Archivo</th>
					<th>Editar/Eliminar</th>
				</tr>
			</thead>
			<tbody>
				@foreach($especiales as $especial)
				<tr>
					<td>{{$especial->tipo}}</td>
					<td>{{$especial->nro_solicitud}}</td>
					<td>{{$especial->fecha_registro}}</td>
					<td>{{$especial->informado_sii}}</td>
					<td>{{$especial->informado_banco}}</td>
					<td>{{$especial->observaciones}}</td>
					<td>{{$especial->texto_refundido}}</td>
					<td>adjunto texto refundido</td>
					<td>archivo adjunto</td>
					<td>
		              <a href="/estatutos_sociales/especiales/edit/{{$especial->id}}" class="menu-cuentas btn btn-info btn-xs ">
		                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
		              </a>
		              <a href="/estatutos_sociales/especiales/delete/{{$especial->id}}" class="delete-estatuto btn btn-danger btn-xs">
		                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
		              </a>
           			</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>