@extends('admin')

@section('myContent')

<div class="row">
	<br>
	<a href="/director/show/{{$id}}" class="btn btn-info menu-cuentas">Lista de directores</a>
	<a href="/director/{{$id}}" class="btn btn-info menu-cuentas">Agregar nuevo Director</a>
	<a href="/directorio/{{$id}}/edit" class="btn btn-info menu-cuentas">Directorio</a>
</div>	

<div class="row">
	<h4 class="text-center">Agregar Secretario</h4>
	{!! Form::open(array('url' => '/secretario', 'method' => 'post', 'class'=>'update-secretario')) !!}
	{!! Form::token() !!}
	 <input type="hidden" name="directorio_id" value="{{$id}}">
	@include('secretarios.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>

<script src="{{ asset('js/directorio.js') }}"></script>

@endsection