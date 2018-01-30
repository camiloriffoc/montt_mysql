<h2>Plazos máximos de pago</h2>

<div class="table-responsive col-sm-12">          
	<table class="table">
		<thead>
			<tr>
				<th>FECHA EMISIÓN</th>
				<th>PLAZO MÁXIMO PAGO</th>
				<th></th>
				<th></th>
			</tr>
		</thead>

		<tbody>	
			@isset($pago)
			@foreach($pago as $pag)
			<tr>
				<td>{{$pag->fecha_emision or ''}}</td>
				<td>{{$pag->plazo_maximo_pago or ''}}</td>
				<td><a href="/capital/pago/edit/{{$pag->id}}" class="menu-cuentas">editar</a></td>
				<td>
					
				</td>
			</tr>
			@endforeach
			@endisset
		</tbody>
	</table>
</div>