@extends('admin')

@section('myContent')

<div class="row">
	<br>
	<a href="/director/{{$id}}" class="btn btn-info menu-cuentas">Agregar nuevo Director</a>
	<a href="/directorio/{{$id}}/edit" class="btn btn-info menu-cuentas">Directorio</a>
	<a href="/secretario/{{$id}}" class="btn btn-info menu-cuentas">Agregar Secretario</a>
</div>	


<div class="row">
	<h4 class="text-center">Lista de Directores</h4>

	@include('directores.partials.list')

</div>
<script src="{{ asset('js/directorio.js') }}"></script>

@endsection