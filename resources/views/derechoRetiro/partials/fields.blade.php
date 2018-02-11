<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $derecho_retiro->sociedad_id}}">

<div class="form-group col-sm-6">
	<label>Causales de derecho retiro:</label>
	<input type="text" class="form-control" name="causales_derecho_retiro" value="{{ $derecho_retiro->causales_derecho_retiro or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Formalidades de la disidencia:</label>
	<input type="text" class="form-control" name="formalidades_disidencia" value="{{ $derecho_retiro->formalidades_disidencia or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Criterio de valoración de las acciones del accionista disidente:</label>
	<input type="text" class="form-control" name="criterio_valoracion_acciones_disidente" value="{{ $derecho_retiro->criterio_valoracion_acciones_disidente or '' }}">
</div>
