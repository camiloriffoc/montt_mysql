<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $listado_dividendo->sociedad_id }}">

<div class="form-group col-sm-6">
	<label>Nombre o Razón Social:</label>
	<input type="text" class="form-control" name="nombre_razon_social" value="{{ $listado_dividendo->nombre_razon_social or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Número de acciones:</label>
	<input type="text" class="form-control" name="numero_acciones" value="{{ $listado_dividendo->numero_acciones or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Serie de acciones:</label>
	<input type="text" class="form-control" name="serie_acciones" value="{{ $listado_dividendo->serie_acciones or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Porcentaje total de acciones emitidas con derecho a dividendo:</label>
	<input type="text" class="form-control" name="porcentaje_capital_derecho_dividendo" value="{{ $listado_dividendo->porcentaje_capital_derecho_dividendo or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Residente en Chile:</label>
	{{ Form::select('residente_chile',['Si' => 'Si', 'No' => 'No'],isset($listado_dividendo->residente_chile) ? $listado_dividendo->residente_chile : 'Si', array('class' => 'form-control')) }}
</div>	