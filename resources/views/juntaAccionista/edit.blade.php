@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Junta de Accionistas</h4>
	{!! Form::model($junta_accionista, [ 'route' => ['junta_accionistas.update',$sociedad->id], 'method' => 'POST', 'class' =>'update-junta-accionistas-ajax']) !!}
	
	@include('juntaAccionista.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>
<script src="{{ asset('js/junta_accionista.js') }}"></script>
@endsection