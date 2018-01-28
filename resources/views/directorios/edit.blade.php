@extends('admin')

@section('myContent')
@isset($directorio)
<div class="row">
	<br>
	<a href="/director/show/{{$directorio->id}}" class="btn btn-info">Lista de directores</a>
	<a href="/director/{{$directorio->id}}" class="btn btn-info">Agregar nuevo Director</a>
	<a href="/secretario/{{$directorio->id}}" class="btn btn-info">Agregar Secretario</a>
</div>	
@endisset

@isset($check)
	<div class="row" style="margin-top: 10px;">
		<div class="alert alert-success alert-dismissable">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    		<strong>Directorio editado con exito</strong>
  		</div>
	</div>
@endisset

<div class="row">
	<h4 class="text-center">Editar Directorio: </h4>
	{!! Form::open(array('url' => '/directorio/store', 'method' => 'post')) !!}
	{!! Form::token() !!}

		<input type="hidden" name="sociedad_id" value="{{$sociedad_id}}" >

	@include('directorios.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>

@endsection

