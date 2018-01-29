@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Accionista: {{ $accionista->razon_social or $accionista->nombre  }}</h4>
	{!! Form::model($accionista, [ 'route' => ['accionistas.update', $accionista], 'method' => 'PUT', 'class' =>'update-registro-ajax']) !!}
	@include('accionistas.partials.fields')
	<button type="submit" class="btn btn-success btn-block add-registro-ajax">Guardar cambios</button>
	{!! Form::close() !!}
</div>
  <script src="{{ asset('js/accionista.js') }}"></script>
@endsection