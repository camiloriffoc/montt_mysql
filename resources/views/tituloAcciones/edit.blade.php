@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Título de acciones: {{ $accionista->razon_social or $accionista->nombre  }}</h4>
	
	{!! Form::model($tituloAccion, [ 'route' => ['tituloAcciones.update', $tituloAccion], 'method' => 'PUT', 'class' =>'update-titulo-acciones-ajax']) !!}
	@include('tituloAcciones.partials.fields')
	<button type="submit" class="btn btn-success btn-block add-registro-ajax">Guardar cambios</button>
	{!! Form::close() !!}
</div>
  <script src="{{ asset('js/titulo_acciones.js') }}"></script>
@endsection