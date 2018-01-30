
{!! Form::open(array('url' => '/capital/pago', 'method' => 'post', 'class'=>'add-capital')) !!}
	{!! Form::token() !!}
	<input type="hidden" name='sociedad_id' value="{{$capital->sociedad_id}}">
	<div class="form-group col-sm-6">
    	<label>FECHA EMISION:</label>
    	<input type="date" class="form-control" name="fecha_emision">
    	<br>
     	<label>PLAZO MAXIMO SUSCRIPCION:</label>
    	<input type="date" class="form-control" name="plazo_maximo_pago">
	</div>
	<div class="form-group col-sm-12">
		
    	<input type="submit" class="btn btn-info" value="Guardar">
  	</div>
{!! Form::close() !!}

