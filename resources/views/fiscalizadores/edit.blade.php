@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Fiscalizadores</h4>
	{!! Form::model($fiscalizador, [ 'route' => ['fiscalizadores.update',$sociedad->id], 'method' => 'POST', 'class' =>'update-fiscalizador-ajax']) !!}
	@include('fiscalizadores.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>
<script src="{{ asset('js/fiscalizadores.js') }}"></script>
@endsection