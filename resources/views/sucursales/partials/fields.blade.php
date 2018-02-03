<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $sucursal->sociedad_id }}">

<div class="form-group col-sm-6">
	<label>Calle/Avenida:</label>
	<input type="text" class="form-control" name="sucursal_calle" value="{{ $sucursal->sucursal_calle or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Número:</label>
	<input type="text" class="form-control" name="sucursal_numero" value="{{ $sucursal->sucursal_numero or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Piso / Oficina:</label>
	<input type="text" class="form-control" name="sucursal_piso" value="{{ $sucursal->sucursal_piso or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Comuna / Distrito:</label>
	<input type="text" class="form-control" name="sucursal_comuna" value="{{ $sucursal->sucursal_comuna or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Ciudad:</label>
	<input type="text" class="form-control" name="sucursal_ciudad" value="{{ $sucursal->sucursal_ciudad or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Región / Provincia / Barra:</label>
	<input type="text" class="form-control" name="sucursal_region_provincia_barra" value="{{ $sucursal->sucursal_region_provincia_barra or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Estado:</label>
	<input type="text" class="form-control" name="sucursal_estado" value="{{ $sucursal->sucursal_estado or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>País:</label>
	<input type="text" class="form-control" name="sucursal_pais" value="{{ $sucursal->sucursal_pais or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Código Postal / Zip Code:</label>
	<input type="text" class="form-control" name="sucursal_codigo_postal" value="{{ $sucursal->sucursal_codigo_postal or '' }}">
</div>

<div class="row">
	<div class="col-md-12">
		<h1 class="text-primary">Patente Municipal</h1>
	</div>
</div>

<div class="form-group col-sm-6">
	<label>Comuna donde paga la patente:</label>
	<input type="text" class="form-control" name="patente_comuna_paga" value="{{ $sucursal->patente_comuna_paga or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Fecha Última patente pagada:</label>
	<input type="date" class="form-control" name="patente_fecha_ultima" value="{{ $sucursal->patente_fecha_ultima or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Registra patente impaga:</label>
	<input type="text" class="form-control" name="patente_registra_impaga" value="{{ $sucursal->patente_registra_impaga or '' }}">
</div>	