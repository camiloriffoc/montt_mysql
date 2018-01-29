@extends('admin')

@section('myContent')
<div class="row">
	<div class="col-md-12">
		<h1>Nuevas Acciones: {{ Session::get('sociedad')->razon_social }}</h1>
	</div>
</div>

<div class="row">
	{!! Form::open([ 'route' => 'acciones.store', 'method' => 'POST', 'class' => 'add-accion-ajax']) !!}
	@include('acciones.partials.fields')

	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>

	{!! Form::close() !!}
</div>
<script src="{{ asset('js/acciones.js') }}"></script>
@endsection