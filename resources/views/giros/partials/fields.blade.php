<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $giro->sociedad_id }}">

<div class="form-group col-sm-6">
	<label>Actividades:</label>
	<input type="text" class="form-control" name="actividades" value="{{ $giro->actividades or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Código:</label>
	<input type="text" class="form-control" name="codigo" value="{{ $giro->codigo or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Categoría:</label>
	<input type="text" class="form-control" name="categoria" value="{{ $giro->categoria or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Afecta IVA:</label>
	<input type="text" class="form-control" name="afecta_iva" value="{{ $giro->afecta_iva or '' }}">
</div>