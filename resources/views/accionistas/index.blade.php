@extends('admin')

@section('myContent')
	<a class="btn btn-success pull-right" href="{{ url('accionistas/create')}}" role="button">Nuevo Accionista</a>
	<div class="row">
		<div class="col-md-12">
			@include('accionistas.partials.table')
		</div>
	</div>
    

@endsection