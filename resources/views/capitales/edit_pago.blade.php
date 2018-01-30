@extends('admin')

@section('myContent')
<br>
<div class="row">
	{!! Form::open(array('url' => '/capital/pago/update/', 'method' => 'post', 'class'=>'add-capital')) !!}
	<input type="hidden" name='id' value='{{$pago->id}}'>
	{!! Form::token() !!}
	<div class="form-group col-sm-6">
    	<label>FECHA EMISION:</label>
    	<input type="date" class="form-control" name="fecha_emision" value="{{$pago->fecha_emision}}">
    	<br>
     	<label>PLAZO MAXIMO SUSCRIPCION:</label>
    	<input type="date" class="form-control" name="plazo_maximo_pago" value="{{$pago->plazo_maximo_pago}}">
	</div>
	<div class="form-group col-sm-12">
		
    	<input type="submit" class="btn btn-info" value="Guardar">
  	</div>
	{!! Form::close() !!}

</div>

<script src="{{ asset('js/capital.js') }}"></script>

@endsection