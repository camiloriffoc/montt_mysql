@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Derecho a Retiro</h4>
	{!! Form::model($derecho_retiro, [ 'route' => ['derecho_retiro.update',$sociedad->id], 'method' => 'POST', 'class' =>'update-derecho-retiro-ajax']) !!}
	@include('derechoRetiro.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>
<script src="{{ asset('js/derecho_retiro.js') }}"></script>
@endsection