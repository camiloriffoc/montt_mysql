@extends('admin')

@section('myContent')
<a class="btn btn-success pull-right" href="#" role="button" data-toggle="modal" data-target="#myModalAddListadoOpciones">Nuevo Listado de Opciones</a>
<div class="row">
	<div class="col-md-12">
		<div class="form-group col-sm-6">
			<label>Opciones sobre acciones:</label>
			{{ Form::select('hay_opciones',['Si' => 'Si', 'No' => 'No'],isset($listado_opciones->hay_opciones) ? $listado_opciones->hay_opciones : 'Si', array('class' => 'form-control')) }}
		</div>	
	</div>
</div>
<div class="row">
	<div class="col-md-12">
		@include('listadoOpciones.partials.table')
	</div>
</div>

<!-- Modal para agregar-->

<div id="myModalAddListadoOpciones" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<p>
					@include('listadoOpciones.create')
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

	</div>
</div> 
@endsection