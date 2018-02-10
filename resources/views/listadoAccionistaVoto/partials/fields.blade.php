<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $listado_voto->sociedad_id }}">

<div class="form-group col-sm-6">
	<label>Nombre o Razón Social:</label>
	<input type="text" class="form-control" name="nombre_razon_social" value="{{ $listado_voto->nombre_razon_social or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Número de acciones:</label>
	<input type="text" class="form-control" name="numero_acciones" value="{{ $listado_voto->numero_acciones or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Serie de acciones:</label>
	<input type="text" class="form-control" name="serie_acciones" value="{{ $listado_voto->serie_acciones or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Porcentaje total de acciones emitidas con derecho a voto:</label>
	<input type="text" class="form-control" name="porcentaje_capital_derecho_voto" value="{{ $listado_voto->porcentaje_capital_derecho_voto or '' }}">
</div>	