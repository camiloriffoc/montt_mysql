@extends('admin')

@section('myContent')
<div class="row">
	<div class="col-md-12">
		<div class="btn-group" role="group" aria-label="Basic example">
			<a type="button" class="btn btn-primary menu-cuentas" href="{{ url('/sucursales',['id' => $sociedad->id]) }}">Administra Sucursales</a>
			<a type="button" class="btn btn-primary">Administrar Giros</a>
			<a type="button" class="btn btn-primary">Otros</a>
		</div>
	</div>
</div>
<div class="row">
	<h4 class="text-center">Editar Sociedad: {{ $sociedad->razon_social  }}</h4>

	{!! Form::model($sociedad, [ 'route' => ['sociedades.update', $sociedad], 'method' => 'PUT']) !!}
	@include('sociedades.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>

@endsection