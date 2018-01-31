<div class="form-group col-sm-6">
	<label>{{ trans('form_general.razon_social') }}:</label>
	<input type="text" class="form-control" name="razon_social" value="{{ $sociedad->razon_social or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>{{ trans('form_general.nombre_fantasia') }}:</label>
	<input type="text" class="form-control" name="nombre_fantasia" value="{{ $sociedad->nombre_fantasia or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>{{ trans('form_general.abierta_cerrada_sa') }}</label>
	<input type="text" class="form-control" name="sa_abierta_o_cerrada" value="{{ $sociedad->sa_abierta_o_cerrada or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>{{ trans('form_general.rut') }}:</label>
	<input type="text" class="form-control" name="rut" value="{{ $sociedad->rut or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>{{ trans('form_general.pais_de_incorporacion') }}:</label>
	<input type="text" class="form-control" name="pais_incorporacion" value="{{ $sociedad->pais_incorporacion or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>{{ trans('form_general.telefono_corporativo') }}:</label>
	<input type="text" class="form-control" name="telefono_corporativo" value="{{ $sociedad->telefono_corporativo or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>{{ trans('form_general.web_site') }}:</label>
	<input type="text" class="form-control" name="website" value="{{ $sociedad->website or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>{{ trans('form_general.grupo_empresarial') }}:</label>
	<input type="text" class="form-control" name="grupo_empresarial" value="{{ $sociedad->grupo_empresarial or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>{{ trans('form_general.archivador_montt') }}:</label>
	<input type="text" class="form-control" name="archivador_fisico_montt_no" value="{{ $sociedad->archivador_fisico_montt_no or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>{{ trans('form_general.duracion') }}:</label>
	<input type="text" class="form-control" name="duracion" value="{{ $sociedad->duracion or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Plazo:</label>
	<input type="text" class="form-control" name="plazo" value="{{ $sociedad->plazo or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>{{ trans('form_general.inicio_acitividades') }}:</label>
	<input type="text" class="form-control" name="inicio_actividades" value="{{ $sociedad->inicio_actividades or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>{{ trans('form_general.modificaciones_inicio_actividades') }}:</label>
	<input type="text" class="form-control" name="modificaciones_inicio_actividades" value="{{ $sociedad->modificaciones_inicio_actividades or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Fecha modificación inicio de actividades:</label>
	<input type="text" class="form-control" name="fecha_modificaciones_inicio_actividades" value="{{ $sociedad->fecha_modificaciones_inicio_actividades or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Denominación moneda Capital Social:</label>
	<input type="text" class="form-control" name="denominacion_moneda_capital_social" value="{{ $sociedad->denominacion_moneda_capital_social or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Autorizado o no para declarar y pagar sus impuestos en moneda extranjera:</label>
	<input type="text" class="form-control" name="autorizado_moneda_extranjera" value="{{ $sociedad->autorizado_moneda_extranjera or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Tipo de Contribuyente:</label>
	<input type="text" class="form-control" name="tipo_de_contribuyente" value="{{ $sociedad->tipo_de_contribuyente or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Regimen Tributario:</label>
	<input type="text" class="form-control" name="regimen_tributario" value="{{ $sociedad->regimen_tributario or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Inscrita o no Regulador Financiero:</label>
	<input type="text" class="form-control" name="inscrita_regulador_finaciero" value="{{ $sociedad->inscrita_regulador_finaciero or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Fax:</label>
	<input type="text" class="form-control" name="fax" value="{{ $sociedad->fax or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Sector:</label>
	<input type="text" class="form-control" name="sector" value="{{ $sociedad->sector or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Ingresos Anuales:</label>
	<input type="text" class="form-control" name="ingresos_anuales" value="{{ $sociedad->ingresos_anuales or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Idioma</label>
	<input type="text" class="form-control" name="idioma" value="{{ $sociedad->idioma or '' }}">
</div>
