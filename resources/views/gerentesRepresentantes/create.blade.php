@extends('admin')

@section('myContent')


<div class="row">

	<h2>Gerente General O Representante</h2>
	{{ Form::open(['url' => 'gerente_representante/store','class'=>'add-gerente', 'method' =>'POST', 'files' => true ]) }}
	<input type="hidden" name='sociedad_id' value={{$sociedad_id}}>
	@include('gerentesRepresentantes.partials.fields')
	
	<br>
  	<br>
  <button type="submit" class="btn btn-success btn-block" >Guardar cambios</button>

	{{ Form::close() }}
</div>

<script src="{{ asset('js/gerenteRepresentante.js') }}"></script><


@endsection