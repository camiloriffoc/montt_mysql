@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Otros Pactos Especiales</h4>
	{!! Form::model($otros_pactos_especiales, [ 'route' => ['otros_pactos_especiales.update',$sociedad->id], 'method' => 'POST', 'class' =>'update-otros-pactos-especiales-ajax']) !!}
	
	@include('otrosPactosEspeciales.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>
<script src="{{ asset('js/otros_pactos_especiales.js') }}"></script>
@endsection