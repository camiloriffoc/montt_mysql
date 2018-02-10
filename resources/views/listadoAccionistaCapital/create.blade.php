<div class="row">
	<div class="col-md-12">
		<h1>Creación de Listado Accionista Capital: {{ $sociedad->razon_social }}</h1>
	</div>
</div>

<div class="row">
	{!! Form::open([ 'route' => 'listado_capital.store', 'method' => 'POST', 'class' => 'add-listado-capital-ajax']) !!}
	@include('listadoAccionistaCapital.partials.fields')

	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>

	{!! Form::close() !!}
</div>
<script src="{{ asset('js/listado_capital.js') }}"></script>