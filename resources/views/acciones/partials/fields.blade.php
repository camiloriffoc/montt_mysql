<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $accion->sociedad_id}}">

<div class="form-group col-sm-6">
	<label>Serie:</label>
	<input type="text" class="form-control" name="serie" value="{{ $accion->serie or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Cantidad:</label>
	<input type="number" class="form-control" name="cantidad" value="{{ $accion->cantidad or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Ordinarias:</label>
	<input type="text" class="form-control" name="ordinarias" value="{{ $accion->ordinarias or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Preferida:</label>
	<input type="text" class="form-control" name="preferidas" value="{{ $accion->preferidas or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Acciones Autorizadas:</label>
	<input type="text" class="form-control" name="acciones_autorizadas" value="{{ $accion->acciones_autorizadas or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Acciones Suscritas:</label>
	<input type="text" class="form-control" name="acciones_suscritas" value="{{ $accion->acciones_suscritas or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Acciones Pagadas:</label>
	<input type="text" class="form-control" name="acciones_pagadas" value="{{ $accion->acciones_pagadas or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Fecha Autorización:</label>
	<input type="date" class="form-control" name="fecha_autorizacion" value="{{ $accion->fecha_autorizacion or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Fecha Máxima de Suscripción:</label>
	<input type="date" class="form-control" name="fecha_maxima_suscripcion" value="{{ $accion->fecha_maxima_suscripcion or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Fecha Máxima de Pago:</label>
	<input type="date" class="form-control" name="fecha_maxima_pago" value="{{ $accion->fecha_maxima_pago or '' }}">
</div>
