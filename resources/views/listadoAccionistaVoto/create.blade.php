<div class="row">
	<div class="col-md-12">
		<h1>Creación de Listado Accionista con Derecho a Voto: {{ $sociedad->razon_social }}</h1>
	</div>
</div>

<div class="row">
	{!! Form::open([ 'route' => 'listado_voto.store', 'method' => 'POST', 'class' => 'add-listado-voto-ajax']) !!}
	@include('listadoAccionistaVoto.partials.fields')

	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>

	{!! Form::close() !!}
</div>
<script src="{{ asset('js/listado_voto.js') }}"></script>