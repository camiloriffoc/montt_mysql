@extends('admin')

@section('myContent')

<div class="row">

	<h2>Inspectores de Cuenta</h2>
	{{ Form::open(['url' => 'inspectores_cuenta/update','class'=>'add-inspector', 'method' =>'POST', 'files' => true ]) }}
	<input type="hidden" name='sociedad_id' value={{$sociedad_id}}>
	@include('inspectoresCuentas.partials.fields')
	<br>
  	<br>
  	<input type="submit" class="btn btn-info" value="Guardar Cambios">

	{{ Form::close() }}
</div>

<div class="row">

	{{ Form::open(['url' => 'inspectores_cuenta/update','class'=>'add-inspector', 'method' =>'POST', 'files' => true ]) }}
	<input type="hidden" name='sociedad_id' value={{$sociedad_id}}>
	@include('inspectoresCuentas.partials.inspector_fields')
	<br>
  	<br>
  	<input type="submit" class="btn btn-info" value="Guardar Cambios">

	{{ Form::close() }}
</div>

<script src="{{ asset('js/inspectorCuenta.js') }}"></script><


@endsection