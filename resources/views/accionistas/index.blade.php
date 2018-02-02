@extends('admin')

@section('myContent')
	<a class="btn btn-success pull-right menu-cuentas" href="{{ url('accionistas/create', ['id' => $sociedad->id]) }}" role="button">Nuevo Accionista</a>
	<div class="row">
		<div class="col-md-12">
			@include('accionistas.partials.table')
		</div>
	</div>
	<!--
	<div class="row">
		<div class="col-md-12">
			{{--  @include('accionistas.partials.table_porcentaje_accionistas') 
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			@include('accionistas.partials.table_titulo_De_acciones')
		</div>
	</div>
	--}} -->
	<div class="row">
		<div class="col-md-12">
			@include('accionistas.partials.table_listado_accionistas_fallecidos')
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			@include('accionistas.partials.table_listado_accionistas_menores_edad')
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			@include('accionistas.partials.table_listado_accionistas_interdiccion')
		</div>
	</div>

	<div class="row">
		<div class="col-md-12">
			@include('accionistas.partials.table_listado_accionistas_liquidacion')
		</div>
	</div>
	 

    

@endsection