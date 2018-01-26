@extends('admin')

@section('myContent')
	<a class="btn btn-success pull-right" href="{{ url('sociedades/create')}}" role="button">Nueva Sociedad</a>
	<div class="row">
		<div class="col-md-12">
			@include('sociedades.partials.table')
		</div>
	</div>
    

@endsection