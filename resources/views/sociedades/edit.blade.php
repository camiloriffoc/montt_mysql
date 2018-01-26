@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Sociedad: {{ $sociedad->razon_social  }}</h4>
	{!! Form::model($sociedad, [ 'route' => ['sociedades.update', $sociedad], 'method' => 'PUT']) !!}
	@include('sociedades.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>

@endsection