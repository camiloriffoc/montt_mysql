@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Forma de Resolución de Conflictos</h4>
	{!! Form::model($forma_resolucion_conflictos, [ 'route' => ['forma_resolucion_conflictos.update',$sociedad->id], 'method' => 'POST', 'class' =>'update-forma-resolucion-conflictos-ajax']) !!}
	
	@include('formaResolucionConflictos.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>
<script src="{{ asset('js/forma_resolucion_conflictos.js') }}"></script>
@endsection