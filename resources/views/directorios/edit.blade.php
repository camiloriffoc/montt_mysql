@extends('admin')

@section('myContent')
@isset($directorio)
<div class="row">
	<br>
	<a href="/director/show/{{$directorio->id}}" class="btn btn-info menu-cuentas ">Lista de directores</a>
	<a href="/director/{{$directorio->id}}" class="btn btn-info menu-cuentas">Agregar nuevo Director</a>
	<a href="/secretario/{{$directorio->id}}" class="btn btn-info menu-cuentas">Agregar Secretario</a>
</div>	
@endisset

<div class="row">
	<h4 class="text-center">Editar Directorio: </h4>
	{!! Form::open(array('url' => '/directorio/store', 'method' => 'post', 'class' => 'add-directorio')) !!}
	{!! Form::token() !!}

		<input type="hidden" name="sociedad_id" value="{{$sociedad_id}}" >

	@include('directorios.partials.fields')
	<button type="submit" class="btn btn-success btn-block" >Guardar cambios</button>
	<script src="{{ asset('js/directorio.js') }}"></script><
	{!! Form::close() !!}
</div>

@endsection

