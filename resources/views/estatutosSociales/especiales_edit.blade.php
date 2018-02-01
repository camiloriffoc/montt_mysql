@extends('admin')

@section('myContent')

<div class="row">

	<h2>Editar Regimen Especial</h2>

	{!! Form::open(array('url' => '/estatutos_sociales/especiales/update', 'method' => 'post', 'class'=> 'add-estatut')) !!}
		
		{!! Form::token() !!}

		<input type="hidden" name="id" value="{{$id}}">
	
		@include('estatutosSociales.partials.especial_form')

		<div class="form-group col-sm-12">
			<input type="submit" class="btn btn-info" value="Guardar Cambios">
		</div>
	{{ Form::close() }}

</div>
<script src="{{ asset('js/estatutoSocial.js') }}"></script>


@endsection