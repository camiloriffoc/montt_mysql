@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Pacto de accionista: {{ $accionista->razon_social or $accionista->nombre  }}</h4>
	
	{!! Form::model($pactoAccionista, [ 'route' => ['pacto_accionista.update', $pactoAccionista], 'method' => 'PUT', 'class' =>'update-pacto-accionista-ajax']) !!}
	@include('pacto_accionista.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>
  <script src="{{ asset('js/pacto_accionista.js') }}"></script>
@endsection