@extends('admin')

@section('myContent')
<a class="btn btn-success pull-right" href="#" role="button" data-toggle="modal" data-target="#myModalAddListadoCapital">Nuevo Listado Accionista Capital</a>
<div class="row">
	<div class="col-md-12">
		@include('listadoAccionistaCapital.partials.table')
	</div>
</div>

<!-- Modal para agregar-->

<div id="myModalAddListadoCapital" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<p>
					@include('listadoAccionistaCapital.create')
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

	</div>
</div> 

@endsection