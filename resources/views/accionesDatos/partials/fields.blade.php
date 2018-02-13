<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $accion->sociedad_id}}">

<div class="form-group col-sm-6">
	<label>Número total acciones:</label>
	<input type="text" class="form-control" name="numero_total_acciones" value="{{ $acciones_datos->numero_total_acciones or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Serie única o varias series:</label>
	<input type="text" class="form-control" name="serie_unica_varias" value="{{ $acciones_datos->serie_unica_varias or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Valor Nominal o Sin Valor nominal:</label>
	<input type="text" class="form-control" name="valor_nominal" value="{{ $acciones_datos->valor_nominal or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Valor de cada acción:</label>
	<input type="text" class="form-control" name="valor_cada_accion" value="{{ $acciones_datos->valor_cada_accion or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Imprimen laminas físicas:</label>
	<input type="text" class="form-control" name="imprime_laminas_fisicas" value="{{ $acciones_datos->imprime_laminas_fisicas or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>No. De acciones suscritas:</label>
	<input type="date" class="form-control" name="numero_acciones_suscritas" value="{{ $acciones_datos->numero_acciones_suscritas or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>No. De acciones Pagadas:</label>
	<input type="date" class="form-control" name="numero_acciones_pagadas" value="{{ $acciones_datos->numero_acciones_pagadas or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Gozan de derechos a dividendo las acciones suscritas y no pagadas:</label>
	<input type="date" class="form-control" name="gozan_dividendo" value="{{ $acciones_datos->gozan_dividendo or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Gozan de derechos a voto las acciones suscritas y no pagadas:</label>
	<input type="date" class="form-control" name="gozan_voto" value="{{ $acciones_datos->gozan_voto or '' }}">
</div>