@extends('admin')

@section('myContent')

<div class="row">
	<br>
	<a href="/director/show/{{$id}}" class="btn btn-info menu-cuentas">Lista de Directores</a>
	<a href="/directorio/{{$id}}/edit" class="btn btn-info menu-cuentas">Directorio</a>
	<a href="/secretario/{{$id}}" class="btn btn-info menu-cuentas">Agregar Secretario</a>
</div>	

<div class="row">
	<h4 class="text-center">Agregar Director</h4>
	{!! Form::open(array('url' => '/director', 'method' => 'post', 'class'=>'add-director')) !!}
	{!! Form::token() !!}
	@include('directores.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}

</div>
<script src="{{ asset('js/directorio.js') }}"></script>

@endsection