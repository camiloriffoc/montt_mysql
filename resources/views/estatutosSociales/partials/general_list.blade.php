<div class="col-md-12">
	<h2>Régimen General</h2>

	<div class="table-responsive col-sm-12">          
		<table class="table">
			<thead>
				<tr>
					<th>Tipo</th>
					<th>Fecha/Repertorio/Notaria</th>
					<th>Inscripción Registro de Comercio Fojas No Año</th>
					<th>Publicación</th>
					<th>Protocolización</th>
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
				@foreach($generales as $general)
				<tr>
					<td>{{$general->tipo}}</td>
					<td>{{$general->fecha_repertorio_notaria}}</td>
					<td>{{$general->inscripcion_registro}}</td>
					<td>{{$general->publicacion}}</td>
					<td>{{$general->protocolizacion}}</td>
					<td>{{$general->informado_sii}}</td>
					<td>{{$general->informado_banco}}</td>
					<td>{{$general->observaciones}}</td>
					<td>{{$general->texto_refundido}}</td>
					<td>Archivo adjunto texto refundido</td>
					<td>Archivo adjunto</td>
					<td>
						<a href="/estatutos_sociales/generales/edit/{{$general->id}}" class="menu-cuentas btn btn-info btn-xs ">
		                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
		              	</a>
		              	<a href="/estatutos_sociales/generales/delete/{{$general->id}}" class="delete-estatuto btn btn-danger btn-xs">
		                <span class="glyphicon glyphicon-remove " aria-hidden="true"></span>
		              	</a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
</div>