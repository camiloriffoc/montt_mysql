
<div class="row">
	<div class="col-md-12">
		<h1>Creación de Giro: {{ $sociedad->razon_social }}</h1>
	</div>
</div>

<div class="row">
	{!! Form::open([ 'route' => 'giros.store', 'method' => 'POST', 'class' => 'add-giro-ajax']) !!}
	@include('giros.partials.fields')

	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>

	{!! Form::close() !!}
</div>
<script src="{{ asset('js/giros.js') }}"></script>
