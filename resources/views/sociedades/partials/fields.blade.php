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

<div class="row">
	<div class="col-md-12">
		<h1 class="text-primary">Dirección Comercial</h1>
	</div>
</div>

<div class="form-group col-sm-6">
	<label>Calle/Avenida:</label>
	<input type="text" class="form-control" name="comercial_calle" value="{{ $sociedad->comercial_calle or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Número:</label>
	<input type="text" class="form-control" name="comercial_numero" value="{{ $sociedad->comercial_numero or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Piso / Oficina:</label>
	<input type="text" class="form-control" name="comercial_piso_oficina" value="{{ $sociedad->comercial_piso_oficina or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Comuna / Distrito:</label>
	<input type="text" class="form-control" name="comercial_comuna" value="{{ $sociedad->comercial_comuna or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Ciudad:</label>
	<input type="text" class="form-control" name="comercial_ciudad" value="{{ $sociedad->comercial_ciudad or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Región / Provincia / Barra:</label>
	<input type="text" class="form-control" name="comercial_region" value="{{ $sociedad->comercial_region or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Estado:</label>
	<input type="text" class="form-control" name="comercial_estado" value="{{ $sociedad->comercial_estado or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>País:</label>
	<input type="text" class="form-control" name="comercial_pais" value="{{ $sociedad->comercial_pais or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Código Postal / Zip Code:</label>
	<input type="text" class="form-control" name="comercial_codigo_postal" value="{{ $sociedad->comercial_codigo_postal or '' }}">
</div>

<div class="row">
	<div class="col-md-12">
		<h1 class="text-primary">Persona de Contacto</h1>
	</div>
</div>

<div class="form-group col-sm-6">
	<label>Nombre:</label>
	<input type="text" class="form-control" name="contacto_nombre" value="{{ $sociedad->contacto_nombre or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Teléfono:</label>
	<input type="text" class="form-control" name="contacto_telefono" value="{{ $sociedad->contacto_telefono or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Correo:</label>
	<input type="text" class="form-control" name="contacto_email" value="{{ $sociedad->contacto_email or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Celular:</label>
	<input type="text" class="form-control" name="contacto_celular" value="{{ $sociedad->contacto_celular or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Skype:</label>
	<input type="text" class="form-control" name="contacto_skype" value="{{ $sociedad->contacto_skype or '' }}">
</div>	

<div class="row">
	<div class="col-md-12">
		<h1 class="text-primary">Dirección Tributaria</h1>
	</div>
</div>

<div class="form-group col-sm-6">
	<label>Calle/Avenida:</label>
	<input type="text" class="form-control" name="tributario_calle" value="{{ $sociedad->tributario_calle or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Número:</label>
	<input type="text" class="form-control" name="tributario_numero" value="{{ $sociedad->tributario_numero or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Piso / Oficina:</label>
	<input type="text" class="form-control" name="tributario_piso_oficina" value="{{ $sociedad->tributario_piso_oficina or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Comuna / Distrito:</label>
	<input type="text" class="form-control" name="tributario_comuna" value="{{ $sociedad->tributario_comuna or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Ciudad:</label>
	<input type="text" class="form-control" name="tributario_ciudad" value="{{ $sociedad->tributario_ciudad or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Región / Provincia / Barra:</label>
	<input type="text" class="form-control" name="tributario_region" value="{{ $sociedad->tributario_region or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Estado:</label>
	<input type="text" class="form-control" name="tributario_estado" value="{{ $sociedad->tributario_estado or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>País:</label>
	<input type="text" class="form-control" name="tributario_pais" value="{{ $sociedad->tributario_pais or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Código Postal / Zip Code:</label>
	<input type="text" class="form-control" name="tributario_codigo_postal" value="{{ $sociedad->tributario_codigo_postal or '' }}">
</div>

<div class="row">
	<div class="col-md-12">
		<h1 class="text-primary">Domicilio comercial Matriz</h1>
	</div>
</div>

<div class="form-group col-sm-6">
	<label>Calle/Avenida:</label>
	<input type="text" class="form-control" name="comercial_matriz_calle" value="{{ $sociedad->comercial_matriz_calle or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Número:</label>
	<input type="text" class="form-control" name="comercial_matriz_numero" value="{{ $sociedad->comercial_matriz_numero or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Piso / Oficina:</label>
	<input type="text" class="form-control" name="comercial_matriz_piso_oficina" value="{{ $sociedad->comercial_matriz_piso_oficina or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Comuna / Distrito:</label>
	<input type="text" class="form-control" name="comercial_matriz_comuna" value="{{ $sociedad->comercial_matriz_comuna or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Ciudad:</label>
	<input type="text" class="form-control" name="comercial_matriz_ciudad" value="{{ $sociedad->comercial_matriz_ciudad or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Región / Provincia / Barra:</label>
	<input type="text" class="form-control" name="comercial_matriz_region" value="{{ $sociedad->comercial_matriz_region or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Estado:</label>
	<input type="text" class="form-control" name="comercial_matriz_estado" value="{{ $sociedad->comercial_matriz_estado or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>País:</label>
	<input type="text" class="form-control" name="comercial_matriz_pais" value="{{ $sociedad->comercial_matriz_pais or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Código Postal / Zip Code:</label>
	<input type="text" class="form-control" name="comercial_matriz_codigo_postal" value="{{ $sociedad->comercial_matriz_codigo_postal or '' }}">
</div>

<div class="row">
	<div class="col-md-12">
		<h1 class="text-primary">Patente Municipal</h1>
	</div>
</div>

<div class="form-group col-sm-6">
	<label>Exenta de Pago:</label>
	<input type="text" class="form-control" name="patente_municipal_exenta_pago" value="{{ $sociedad->patente_municipal_exenta_pago or '' }}">
</div>
<div class="form-group col-sm-6">
	<label>Comuna donde paga la patente la casa matriz:</label>
	<input type="text" class="form-control" name="patente_municipal_comuna" value="{{ $sociedad->patente_municipal_comuna or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Fecha última patente pagada:</label>
	<input type="text" class="form-control" name="patente_municipal_ultima_pagada" value="{{ $sociedad->patente_municipal_ultima_pagada or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Registra patente impaga:</label>
	<input type="text" class="form-control" name="patente_municipal_registra_impaga" value="{{ $sociedad->patente_municipal_registra_impaga or '' }}">
</div>

<div class="row">
	<div class="col-md-12">
		<h1 class="text-primary">Contador a cargo</h1>
	</div>
</div>

<div class="form-group col-sm-6">
	<label>Nombre</label>
	<input type="text" class="form-control" name="contador_nombre" value="{{ $sociedad->contador_nombre or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Rut:</label>
	<input type="text" class="form-control" name="contador_rut" value="{{ $sociedad->contador_rut or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Calle/Avenida:</label>
	<input type="text" class="form-control" name="contador_domicilio_calle" value="{{ $sociedad->contador_domicilio_calle or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Número:</label>
	<input type="text" class="form-control" name="contador_domicilio_numero" value="{{ $sociedad->contador_domicilio_numero or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Piso:</label>
	<input type="text" class="form-control" name="contador_domicilio_piso" value="{{ $sociedad->contador_domicilio_piso or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Comuna / Distrito:</label>
	<input type="text" class="form-control" name="contador_domicilio_comuna" value="{{ $sociedad->contador_domicilio_comuna or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Ciudad:</label>
	<input type="text" class="form-control" name="contador_domicilio_ciudad" value="{{ $sociedad->contador_domicilio_ciudad or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Región / Provincia / Barra:</label>
	<input type="text" class="form-control" name="contador_domicilio_region" value="{{ $sociedad->contador_domicilio_region or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Estado:</label>
	<input type="text" class="form-control" name="contador_domicilio_estado" value="{{ $sociedad->contador_domicilio_estado or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>País:</label>
	<input type="text" class="form-control" name="contador_domicilio_pais" value="{{ $sociedad->contador_domicilio_pais or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Código Postal / Zip Code:</label>
	<input type="text" class="form-control" name="contador_domicilio_codigo" value="{{ $sociedad->contador_domicilio_codigo or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Profesión:</label>
	<input type="text" class="form-control" name="contador_domicilio_profesion" value="{{ $sociedad->contador_domicilio_profesion or '' }}">
</div>


<div class="form-group col-sm-6">
	<label>Nacionalidad:</label>
	<input type="text" class="form-control" name="contador_domicilio_nacionalidad" value="{{ $sociedad->contador_domicilio_nacionalidad or '' }}">
</div>


<div class="form-group col-sm-6">
	<label>Correo Electrónico:</label>
	<input type="text" class="form-control" name="contador_domicilio_email" value="{{ $sociedad->contador_domicilio_email or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Skype:</label>
	<input type="text" class="form-control" name="contador_domicilio_skype" value="{{ $sociedad->contador_domicilio_skype or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Teléfono:</label>
	<input type="text" class="form-control" name="contador_domicilio_telefono" value="{{ $sociedad->contador_domicilio_telefono or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Celular:</label>
	<input type="text" class="form-control" name="contador_domicilio_celular" value="{{ $sociedad->contador_domicilio_celular or '' }}">
</div>

