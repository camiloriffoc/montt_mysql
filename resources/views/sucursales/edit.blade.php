@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar sucursal: {{ $sucursal->sucursal_calle  }}</h4>
	{!! Form::model($sucursal, [ 'route' => ['sucursales.update', $sucursal], 'method' => 'PUT', 'class' => 'update-sucursal-ajax']) !!}
	@include('sucursales.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>
<script src="{{ asset('js/sucursales.js') }}"></script>
@endsection