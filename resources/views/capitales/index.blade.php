@extends('admin')

@section('myContent')

<div class="row">
	{!! Form::open(array('url' => '/capital', 'method' => 'post', 'class'=>'add-capital')) !!}
	{!! Form::token() !!}
	<input type="hidden" name='sociedad_id' value={{$sociedad_id}}>
	@include('capitales.partials.fields')
	<div class="form-group col-sm-12">
		
    	<input type="submit" class="btn btn-info" value="Guardar">
  	</div>
	{!! Form::close() !!}

</div>
<div class="row">
	@include('capitales.partials.plazo_pago_list')
</div>
<div class="row">
	@include('capitales.partials.plazo_pago_field')
</div>
<div class="row">
	@include('capitales.partials.plazo_suscripcion_list')
</div>
<div class="row">
	@include('capitales.partials.plazo_suscripcion_field')
</div>
<script src="{{ asset('js/capital.js') }}"></script>

@endsection