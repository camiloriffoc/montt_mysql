@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Porcentaje de accionista: {{ $accionista->razon_social or $accionista->nombre  }}</h4>
	
	{!! Form::model($porcentajeAA, [ 'route' => ['porcentajeAccionesAccionista.update', $porcentajeAA], 'method' => 'PUT', 'class' =>'update-porcentaje-acciones-ajax']) !!}
	@include('porcentajeAccionesAccionista.partials.fields')
	<button type="submit" class="btn btn-success btn-block add-registro-ajax">Guardar cambios</button>
	{!! Form::close() !!}
</div>
  <script src="{{ asset('js/porcentaje_acciones_accionista.js') }}"></script>
@endsection