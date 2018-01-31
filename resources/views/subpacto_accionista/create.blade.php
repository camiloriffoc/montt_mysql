<div class="row">
	<div class="col-md-12">
		<h1>Creación de subpacto de accionista: {{ $accionista->razon_social or $accionista->nombre }}</h1>
	</div>
</div>

<div class="row">
	{!! Form::open([ 'route' => 'subpacto_accionista.store', 'method' => 'POST', 'class' => 'add-subpacto-accionista-ajax']) !!}
	@include('subpacto_accionista.partials.fields')

	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>

	{!! Form::close() !!}
</div>
<script src="{{ asset('js/sub_pactos_accionista.js') }}"></script>