@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar giro: {{ $giro->actividades  }}</h4>
	{!! Form::model($giro, [ 'route' => ['giros.update', $giro], 'method' => 'PUT', 'class' => 'update-giro-ajax']) !!}
	@include('giros.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>
<script src="{{ asset('js/giros.js') }}"></script>
@endsection