@extends('admin')

@section('myContent')

<div class="row">
	<h2>Editar AUTORIZACIONES SECTORES REGULADOS</h2>
	{!! Form::open(array('url' => '/autorizacion_sectores/update', 'method' => 'post', 'class'=>'add-autorizacion', 'files' => true)) !!}
	{!! Form::token() !!}
	<input type="hidden" name='id' value={{$id}}>

		<div class="form-group col-sm-4">
			<br>
        	<input type="file" class="form-control" name="resoluciones" accept="application/pdf">

		</div>
		<div class="form-group col-sm-2">
			<br>
       		<a target="_blank" href="{{asset('uploads/autorizaciones/'.$autorizacion->resoluciones)}}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a>
       		<p>{{$autorizacion->resoluciones}}</p>
       	</div>	
	<div class="form-group col-sm-12">
		
    	<input type="submit" class="btn btn-info" value="Guardar">
  	</div>
	{!! Form::close() !!}

</div>

<script src="{{ asset('js/autorizacionSectores.js') }}"></script>

@endsection