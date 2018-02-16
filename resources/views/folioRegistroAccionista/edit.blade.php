@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Folio de: {{ $accionista->razon_social or $accionista->nombre  }}</h4>
	
	{!! Form::model($folio_registro_accionista, [ 'route' => ['folioRegistroAccionista.update', $folio_registro_accionista], 'method' => 'PUT', 'class' =>'update-folio-registro-accionista-ajax']) !!}
	@include('folioRegistroAccionista.partials.fields')
	<button type="submit" class="btn btn-success btn-block add-registro-ajax">Guardar cambios</button>
	{!! Form::close() !!}
</div>
  <script src="{{ asset('js/folio_registro_accionista.js') }}"></script>
@endsection