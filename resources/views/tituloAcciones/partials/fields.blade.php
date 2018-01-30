<!-- ID del Accionista -->
<input type="hidden" name="accionista_id" value="{{$accionista->id or $tituloAccion->accionista_id }}">

<div class="form-group col-sm-6">
	<label>No. Título:</label>
	<input type="text" class="form-control" name="numero_titulo" value="{{ $tituloAccion->numero_titulo or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Vigente o Inutilizado:</label>
	 {{ Form::select('vigente_inutilizable',['Vigente' => 'Vigente', 'Inutilizado' => 'Inutilizado'],isset($accionista->vigente_inutilizable) ? $accionista->vigente_inutilizable : 'Vigente', array('class' => 'form-control')) }}
</div>	

<div class="form-group col-sm-6">
	<label>Número de Acciones:</label>
	<input type="text" class="form-control" name="numero_acciones" value="{{ $tituloAccion->numero_acciones or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Tipo Acciones:</label>
	<input type="text" class="form-control" name="tipo_acciones" value="{{ $tituloAccion->tipo_acciones or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Fecha Suscripción o compra:</label>
	<input type="text" class="form-control" name="fecha_suscripcion_compra" value="{{ $tituloAccion->fecha_suscripcion_compra or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Pagadas o no :</label>
	{{ Form::select('pagada_o_no',['Pagada' => 'Pagada', 'No Pagada (Total)' => 'No Pagada (Total)', 'No Pagada (Parcial)' => 'No Pagada (Parcial)'],isset($accionista->pagada_o_no) ? $accionista->pagada_o_no : 'Vigente', array('class' => 'form-control')) }}
</div>
