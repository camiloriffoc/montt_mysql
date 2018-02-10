@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Listado de Accionista Con derecho a Voto: {{ $listado_voto->razon_social or $listado_voto->nombre  }}</h4>
	{!! Form::model($listado_voto, [ 'route' => ['listado_voto.update', $listado_voto], 'method' => 'PUT', 'class' =>'update-listado-voto-ajax']) !!}
	@include('listadoAccionistaVoto.partials.fields')
	<button type="submit" class="btn btn-success btn-block add-registro-ajax">Guardar cambios</button>
	{!! Form::close() !!}
</div>
  <script src="{{ asset('js/listado_voto.js') }}"></script>
@endsection