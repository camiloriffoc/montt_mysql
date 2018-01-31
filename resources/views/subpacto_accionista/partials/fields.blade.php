<!-- ID del Accionista -->
<input type="hidden" name="accionista_id" value="{{$accionista->id or $subpactoAccionista->accionista_id }}">

<div class="form-group col-sm-6">
	<label>Título:</label>
	<input type="text" class="form-control" name="titulo" value="{{ $subpactoAccionista->titulo or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Número de Acciones:</label>
	<input type="text" class="form-control" name="numero_acciones" value="{{ $subpactoAccionista->numero_acciones or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>% del Subpacto:</label>
	<input type="text" class="form-control" name="porcentaje_subpacto" value="{{ $subpactoAccionista->porcentaje_subpacto or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Fecha Vigencia Pacto:</label>
	<input type="date" class="form-control" name="fecha_vigencia_subpacto" value="{{ $subpactoAccionista->fecha_vigencia_subpacto or '' }}">
</div>

