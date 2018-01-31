<div class="row">
	<div class="col-md-12">
		<h1>Creación de Pacto de accionista: {{ $accionista->razon_social or $accionista->nombre }}</h1>
	</div>
</div>

<div class="row">
	{!! Form::open([ 'route' => 'pacto_accionista.store', 'method' => 'POST', 'class' => 'add-pacto-accionista-ajax']) !!}
	@include('pacto_accionista.partials.fields')

	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>

	{!! Form::close() !!}
</div>
<script src="{{ asset('js/pacto_accionista.js') }}"></script>