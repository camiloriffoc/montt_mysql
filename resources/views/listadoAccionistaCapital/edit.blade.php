@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Listado de Accionista Capital: {{ $listado_capital->razon_social or $listado_capital->nombre  }}</h4>
	{!! Form::model($listado_capital, [ 'route' => ['listado_capital.update', $listado_capital], 'method' => 'PUT', 'class' =>'update-listado-capital-ajax']) !!}
	@include('listadoAccionistaCapital.partials.fields')
	<button type="submit" class="btn btn-success btn-block add-registro-ajax">Guardar cambios</button>
	{!! Form::close() !!}
</div>
  <script src="{{ asset('js/listado_capital.js') }}"></script>
@endsection