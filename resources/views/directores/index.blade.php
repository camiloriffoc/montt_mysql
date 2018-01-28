@extends('admin')

@section('myContent')

<div class="row">
	<br>
	<a href="/director/show/{{$id}}" class="btn btn-info">Lista de Directores</a>
	<a href="/directorio/{{$id}}/edit" class="btn btn-info">Directorio</a>
	<a href="/secretario/{{$id}}" class="btn btn-info">Agregar Secretario</a>
</div>	

@isset($check)
	<div class="row" style="margin-top: 10px;">
		<div class="alert alert-success alert-dismissable">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    		<strong>Director agregado con exito</strong>
  		</div>
	</div>
@endisset

<div class="row">
	<h4 class="text-center">Agregar Director</h4>
	{!! Form::open(array('url' => '/director', 'method' => 'post')) !!}
	{!! Form::token() !!}
	@include('directores.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>

@endsection