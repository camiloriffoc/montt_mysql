<!-- ID del Accionista -->
<input type="hidden" name="accionista_id" value="{{$accionista->id or $pactoAccionista->accionista_id }}">

<div class="form-group col-sm-6">
	<label>Título:</label>
	<input type="text" class="form-control" name="titulo" value="{{ $pactoAccionista->titulo or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Número de Acciones:</label>
	<input type="text" class="form-control" name="numero_acciones" value="{{ $pactoAccionista->numero_acciones or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Fecha Vigencia Pacto:</label>
	<input type="date" class="form-control" name="fecha_vigencia_pacto" value="{{ $pactoAccionista->fecha_vigencia_pacto or '' }}">
</div>

