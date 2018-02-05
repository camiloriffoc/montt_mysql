@extends('admin')

@section('myContent')


<div class="row">
	<br><br>
	<a href="/gerente_representante/create/{{$sociedad_id}}" class="btn btn-info menu-cuentas ">Agregar Nuevo Gerente</a>

	<h2>Listado de Gerentes o Representantes</h2>
	
	@include('gerentesRepresentantes.partials.list')

</div>

<script src="{{ asset('js/gerenteRepresentante.js') }}"></script>


@endsection