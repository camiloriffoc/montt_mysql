@extends('admin')

@section('myContent')

<div class="row">
	<h2>AUTORIZACIONES SECTORES REGULADOS</h2>
	{!! Form::open(array('url' => '/autorizacion_sectores/store', 'method' => 'post', 'class'=>'add-autorizacion', 'files' => true)) !!}
	{!! Form::token() !!}
	<input type="hidden" name='sociedad_id' value={{$sociedad_id}}>

		<div class="form-group col-sm-4">
			<br>
        	<input type="file" class="form-control" name="resoluciones" accept="application/pdf">
		</div>
	<div class="form-group col-sm-12">
		
    	<input type="submit" class="btn btn-info" value="Guardar">
  	</div>
	{!! Form::close() !!}

</div>
<div class="row">
	
	<table class="table table-striped">
    <thead>
      <tr >
        <th >Id</th>
        <th >Resolucion</th>
        <th >Acciones</th>
     </tr>
    </thead>
    <tbody>
    	
    	@foreach($resoluciones as $resolucion)
			<tr>
				<td>{{$resolucion->id}}</td>
            	<td><a target="_blank" href="{{asset('uploads/autorizaciones/'.$resolucion->resoluciones)}}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></td>
            	<td><a href="/autorizacion_sectores/edit/{{$resolucion->id}}" class="menu-cuentas" style="margin-left: 5px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> - <a href="/autorizacion_sectores/delete/{{$resolucion->id}}" class="delete-gerente"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
            </tr>
		@endforeach     
    </tbody>
  </table>
</div>

<script src="{{ asset('js/autorizacionSectores.js') }}"></script>

@endsection