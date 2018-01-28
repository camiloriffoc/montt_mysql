@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Acción: {{ $accion->serie }} | {{ $accion->cantidad }}</h4>
	{!! Form::model($accion, [ 'route' => ['acciones.update', $accion], 'method' => 'PUT', 'class' =>'update-accion-ajax']) !!}
	@include('acciones.partials.fields')
	<button type="submit" class="btn btn-success btn-block add-registro-ajax">Guardar cambios</button>
	{!! Form::close() !!}
</div>
<script src="{{ asset('js/acciones.js') }}"></script>
@endsection