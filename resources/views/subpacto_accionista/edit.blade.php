@extends('admin')

@section('myContent')

<div class="row">
	<h4 class="text-center">Editar Pacto de accionista: {{ $accionista->razon_social or $accionista->nombre  }}</h4>
	
	{!! Form::model($subpactoAccionista, [ 'route' => ['subpacto_accionista.update', $subpactoAccionista], 'method' => 'PUT', 'class' =>'update-subpacto-accionista-ajax']) !!}
	@include('subpacto_accionista.partials.fields')
	<button type="submit" class="btn btn-success btn-block">Guardar cambios</button>
	{!! Form::close() !!}
</div>
  <script src="{{ asset('js/sub_pactos_accionista.js') }}"></script>
@endsection