
<div class="row">
	<div class="col-md-12">
		<h1>Creación de Sucursal: {{ $sociedad->razon_social }}</h1>
	</div>
</div>

<div class="row">
	{!! Form::open([ 'route' => 'sucursales.store', 'method' => 'POST', 'class' => 'add-sucursal-ajax']) !!}
	@include('sucursales.partials.fields')

	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>

	{!! Form::close() !!}
</div>
<script src="{{ asset('js/sucursales.js') }}"></script>
