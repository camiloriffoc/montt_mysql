<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $listado_opciones->sociedad_id }}">

<div class="form-group col-sm-6">
	<label>Número de Opción:</label>
	<input type="text" class="form-control" name="numero_de_opcion" value="{{ $listado_opciones->numero_de_opcion or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Titular de la Opción:</label>
	<input type="text" class="form-control" name="titular_opcion" value="{{ $listado_opciones->titular_opcion or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Acciones subyacentes que comprende:</label>
	<input type="text" class="form-control" name="acciones_subyacentes" value="{{ $listado_opciones->acciones_subyacentes or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Vencimiento de la Opción:</label>
	<input type="date" class="form-control" name="vencimiento_opcion" value="{{ $listado_opciones->vencimiento_opcion or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Cesionario de la Opción:</label>
	<input type="text" class="form-control" name="cesionario_opcion" value="{{ $listado_opciones->cesionario_opcion or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Ejecutada:</label>
	{{ Form::select('ejecutada',['Si' => 'Si', 'No' => 'No'],isset($listado_opciones->ejecutada) ? $listado_opciones->ejecutada : 'Si', array('class' => 'form-control')) }}
</div>	

<div class="form-group col-sm-6">
	<label>Cancelación de la Opción:</label>
	<input type="text" class="form-control" name="cancelacion_opcion" value="{{ $listado_opciones->cancelacion_opcion or '' }}">
</div>

