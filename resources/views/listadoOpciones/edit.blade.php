@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Listado de Opciones: {{ $listado_opciones->razon_social or $listado_opciones->nombre  }}</h4>
	{!! Form::model($listado_opciones, [ 'route' => ['listado_opciones.update', $listado_opciones], 'method' => 'PUT', 'class' =>'update-listado-opciones-ajax']) !!}
	@include('listadoOpciones.partials.fields')
	<button type="submit" class="btn btn-success btn-block add-registro-ajax">Guardar cambios</button>
	{!! Form::close() !!}
</div>
  <script src="{{ asset('js/listado_opciones.js') }}"></script>
@endsection