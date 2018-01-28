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