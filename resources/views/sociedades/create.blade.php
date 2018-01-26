@extends('admin')

@section('myContent')
<div class="row">
	<div class="col-md-12">
		<h1>Creación de Sociedades</h1>
	</div>
</div>

<div class="row">
	{!! Form::open([ 'route' => 'sociedades.store', 'method' => 'POST']) !!}
	@include('sociedades.partials.fields')

	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>

	{!! Form::close() !!}
</div>

@endsection
