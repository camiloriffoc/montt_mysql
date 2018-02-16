<div class="row">
	<div class="col-md-12">
		<h1>Creación de Folio Registro Accionista: {{ $accionista->razon_social or $accionista->nombre }}</h1>
	</div>
</div>

<div class="row">
	{!! Form::open([ 'route' => 'folioRegistroAccionista.store', 'method' => 'POST', 'class' => 'add-folio-registro-accionista-ajax']) !!}
	@include('folioRegistroAccionista.partials.fields')

	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>

	{!! Form::close() !!}
</div>
<script src="{{ asset('js/folio_registro_accionista.js') }}"></script>