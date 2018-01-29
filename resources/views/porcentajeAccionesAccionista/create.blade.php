<div class="row">
	<div class="col-md-12">
		<h1>Creación de Porcentaje de acciones de Accionista: {{ $accionista->razon_social or $accionista->nombre }}</h1>
	</div>
</div>

<div class="row">
	{!! Form::open([ 'route' => 'porcentajeAccionesAccionista.store', 'method' => 'POST', 'class' => 'add-porcentaje-acciones-ajax']) !!}
	@include('porcentajeAccionesAccionista.partials.fields')

	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>

	{!! Form::close() !!}
</div>
<script src="{{ asset('js/porcentaje_acciones_accionista.js') }}"></script>