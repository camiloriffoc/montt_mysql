@extends('admin')

@section('myContent')

<div class="row">
	<br>
	<a href="/director/show/{{$director->directorio_id}}" class="btn btn-info menu-cuentas">Lista de Directores</a>
	<a href="/directorio/{{$director->directorio_id}}/edit" class="btn btn-info menu-cuentas">Directorio</a>
	<a href="/secretario/{{$director->directorio_id}}" class="btn btn-info menu-cuentas">Agregar Secretario</a>
</div>	

@isset($check)
	<div class="row" style="margin-top: 10px;">
		<div class="alert alert-success alert-dismissable">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    		<strong>Director editado con exito</strong>
  		</div>
	</div>
@endisset

<div class="row">
	<h4 class="text-center">Editar Director</h4>
	{!! Form::open(array('url' => '/director/update', 'method' => 'POST', 'class'=>'update-director')) !!}
	{!! Form::token() !!}
	@include('directores.partials.fields_edit')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
	
</div>
<script src="{{ asset('js/directorio.js') }}"></script>
@endsection