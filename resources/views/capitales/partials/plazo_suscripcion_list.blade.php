<h2>Plazos máximos de suscripcion</h2>

<div class="table-responsive col-sm-12">          
	<table class="table">
		<thead>
			<tr>
				<th>FECHA EMISIÓN</th>
				<th>PLAZO MÁXIMO SUSCRIPCIÓN</th>
				<th></th>
				<th></th>
			</tr>
		</thead>

		<tbody>	
			@isset($suscripcion)
			@foreach($suscripcion as $sus)
			<tr>
				<td>{{$sus->fecha_emision or ''}}</td>
				<td>{{$sus->plazo_maximo_suscripcion or ''}}</td>
				<td><a href="/capital/suscripcion/edit/{{$sus->id}}" class="menu-cuentas">Editar</a></td>
				<td>
					
				</td>
			</tr>
			@endforeach
			@endisset
		</tbody>
	</table>
</div>