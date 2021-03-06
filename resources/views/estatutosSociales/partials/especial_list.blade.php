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
					<td><p><a target="_blank" href="{{asset('uploads/estatutos/'.$especial->escritura_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p></td>
					<td><p><a target="_blank" href="{{asset('uploads/estatutos/'.$especial->texto_refundido_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p></td>
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