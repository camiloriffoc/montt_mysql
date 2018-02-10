<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $listado_capital->sociedad_id }}">

<div class="form-group col-sm-6">
	<label>Nombre o Razón Social:</label>
	<input type="text" class="form-control" name="nombre_razon_social" value="{{ $listado_capital->nombre_razon_social or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Número de acciones:</label>
	<input type="text" class="form-control" name="numero_acciones" value="{{ $listado_capital->numero_acciones or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Serie de acciones:</label>
	<input type="text" class="form-control" name="serie_acciones" value="{{ $listado_capital->serie_acciones or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Porcentaje de capital pagado:</label>
	<input type="text" class="form-control" name="porcentaje_capital_pagado" value="{{ $listado_capital->porcentaje_capital_pagado or '' }}">
</div>	