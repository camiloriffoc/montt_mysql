@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Listado de Accionista Con derecho a Dividendo: {{ $listado_dividendo->razon_social or $listado_dividendo->nombre  }}</h4>
	{!! Form::model($listado_dividendo, [ 'route' => ['listado_dividendo.update', $listado_dividendo], 'method' => 'PUT', 'class' =>'update-listado-dividendo-ajax']) !!}
	@include('listadoAccionistaDividendo.partials.fields')
	<button type="submit" class="btn btn-success btn-block add-registro-ajax">Guardar cambios</button>
	{!! Form::close() !!}
</div>
  <script src="{{ asset('js/listado_dividendo.js') }}"></script>
@endsection