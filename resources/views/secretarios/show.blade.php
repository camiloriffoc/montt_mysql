@extends('admin')

@section('myContent')

<div class="row">
	<br>
	<a href="/director/show/{{$id}}" class="btn btn-info">Lista de directores</a>
	<a href="/director/{{$id}}" class="btn btn-info">Agregar nuevo Director</a>
	<a href="/directorio/{{$id}}/edit" class="btn btn-info">Directorio</a>
</div>	


<div class="row" style="margin-top: 10px;">
	<div class="alert alert-success alert-dismissable">
		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
		<strong>Secretario editado con exito</strong>
	</div>
</div>


<div class="row">
	<h4 class="text-center">Agregar Secretario</h4>
	{!! Form::open(array('url' => '/secretario', 'method' => 'post')) !!}
	{!! Form::token() !!}
	 <input type="hidden" name="directorio_id" value="{{$id}}">
	@include('secretarios.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>

@endsection