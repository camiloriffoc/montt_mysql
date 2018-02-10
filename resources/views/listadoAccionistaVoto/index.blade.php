
<a class="btn btn-success pull-right" href="#" role="button" data-toggle="modal" data-target="#myModalAddListadoVoto">Nuevo Listado Accionista con Derecho a Voto</a>
<div class="row">
	<div class="col-md-12">
		@include('listadoAccionistaVoto.partials.table')
	</div>
</div>

<!-- Modal para agregar-->

<div id="myModalAddListadoVoto" class="modal fade" role="dialog">
	<div class="modal-dialog modal-lg">
		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-body">
				<p>
					@include('listadoAccionistaVoto.create')
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Cerrar</button>
			</div>
		</div>

	</div>
</div> 
