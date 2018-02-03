@extends('admin')

@section('myContent')
<a class="btn btn-success pull-right" href="#" role="button" data-toggle="modal" data-target="#myModalAddGiro">Nuevo Giro</a>
<div class="row">
	<div class="col-md-12">
		@include('giros.partials.table')
	</div>
</div>

<!-- Modal para agregar nueva sucursal -->

<div id="myModalAddGiro" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<p>
					@include('giros.create')
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

	</div>
</div> 

@endsection