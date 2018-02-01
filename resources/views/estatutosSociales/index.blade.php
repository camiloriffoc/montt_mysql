@extends('admin')

@section('myContent')

<div class="row">
	<div class="col-md-12">
		<h2>ESTATUTOS SOCIALES</h2>
	</div>
	<div class="row">	
	@include('estatutosSociales.partials.general_list')
	</div>
	<br>
	<div class="row">
		
		{!! Form::open(array('url' => '/estatutos_sociales/generales', 'method' => 'post', 'class'=> 'add-estatuto')) !!}
			{!! Form::token() !!}

			<input type="hidden" name="sociedad_id" value="{{$sociedad_id}}">
			
			@include('estatutosSociales.partials.general_form')
		
			<div class="form-group col-sm-12">
				<input type="submit" class="btn btn-info" value="Guardar Cambios">
			</div>
		{{ Form::close() }}

	</div>
	<br>
	<div class="row">
	@include('estatutosSociales.partials.especial_list')
	</div>
	<br>
	<div class="row">
		{!! Form::open(array('url' => '/estatutos_sociales/especiales', 'method' => 'post', 'class'=> 'add-estatuto')) !!}
			{!! Form::token() !!}

			<input type="hidden" name="sociedad_id" value="{{$sociedad_id}}">
			
			@include('estatutosSociales.partials.especial_form')

			<div class="form-group col-sm-12">
				<input type="submit" class="btn btn-info" value="Guardar Cambios">
			</div>
		{{ Form::close() }}
	</div>

</div>

<script src="{{ asset('js/estatutoSocial.js') }}"></script>


@endsection