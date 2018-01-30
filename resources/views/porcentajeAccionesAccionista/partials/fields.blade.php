<!-- ID del Accionista -->
<input type="hidden" name="accionista_id" value="{{$accionista->id or $porcentajeAA->accionista_id }}">

<div class="form-group col-sm-6">
	<label>Total acciones autorizadas:</label>
	<input type="text" class="form-control" name="total_acciones_autorizadas" value="{{ $porcentajeAA->total_acciones_autorizadas or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Número de acciones suscritas:</label>
	<input type="text" class="form-control" name="numero_acciones_suscritas" value="{{ $porcentajeAA->numero_acciones_suscritas or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Acciones pagadas:</label>
	<input type="text" class="form-control" name="acciones_pagadas" value="{{ $porcentajeAA->acciones_pagadas or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Fecha autorización:</label>
	<input type="text" class="form-control" name="fecha_autorizacion" value="{{ $porcentajeAA->fecha_autorizacion or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Fecha máxima de pago:</label>
	<input type="text" class="form-control" name="fecha_maxima_de_pago" value="{{ $porcentajeAA->fecha_maxima_de_pago or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Porcentaje de acciones:</label>
	<input type="text" class="form-control" name="porcentaje_de_acciones" value="{{ $porcentajeAA->porcentaje_de_acciones or '' }}">
</div>
