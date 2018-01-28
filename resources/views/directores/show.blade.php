@extends('admin')

@section('myContent')

<div class="row">
	<br>
	<a href="/director/{{$id}}" class="btn btn-info">Agregar nuevo Director</a>
	<a href="/directorio/{{$id}}/edit" class="btn btn-info">Directorio</a>
	<a href="/secretario/{{$id}}" class="btn btn-info">Agregar Secretario</a>
</div>	

@isset($check)
	<div class="row" style="margin-top: 10px;">
		<div class="alert alert-success alert-dismissable">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    		<strong>Director editado con exito</strong>
  		</div>
	</div>
@endisset
@isset($delete)
    <div class="row" style="margin-top: 10px;">
		<div class="alert alert-danger alert-dismissable">
    		<a href="#" class="close" data-dismiss="alert" aria-label="close">×</a>
    		<strong>Director eliminado con exito</strong>
  		</div>
	</div>
@endisset


<div class="row">
	<h4 class="text-center">Lista de Directores</h4>

	@include('directores.partials.list')

</div>

@endsection