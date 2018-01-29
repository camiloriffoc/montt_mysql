@extends('admin')

@section('myContent')
	<a class="btn btn-success pull-right menu-cuentas" href="{{ url('acciones/create', ['id' => $sociedad->id]) }}" role="button">Nuevas Acciones</a>
	<div class="row">
		<div class="col-md-12">
			@include('acciones.partials.table')
		</div>
	</div>
    

@endsection