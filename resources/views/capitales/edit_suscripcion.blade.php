@extends('admin')

@section('myContent')
<br>
<div class="row">
	{!! Form::open(array('url' => '/capital/suscripcion/update/', 'method' => 'post', 'class'=>'add-capital')) !!}
	<input type="hidden" name='id' value='{{$suscripcion->id}}'>
	{!! Form::token() !!}
	<div class="form-group col-sm-6">
    	<label>FECHA EMISION:</label>
    	<input type="date" class="form-control" name="fecha_emision" value="{{$suscripcion->fecha_emision}}">
    	<br>
     	<label>PLAZO MAXIMO SUSCRIPCION:</label>
    	<input type="date" class="form-control" name="plazo_maximo_suscripcion" value="{{$suscripcion->plazo_maximo_suscripcion}}">
	</div>
	<div class="form-group col-sm-12">
		
    	<input type="submit" class="btn btn-info" value="Guardar">
  	</div>
	{!! Form::close() !!}

</div>

<script src="{{ asset('js/capital.js') }}"></script>

@endsection