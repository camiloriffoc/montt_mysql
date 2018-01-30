
<div class="form-group col-sm-6">
	<label>Tipo:</label>
	{{ Form::select('tipo_accionista',['natural' => 'Persona Natural', 'juridica' => 'Persona jurídica'],isset($accionista->tipo_accionista) ? $accionista->tipo_accionista : 'natural', array('class' => 'form-control')) }}
</div>

<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $accionista->sociedad_id }}">

<div class="form-group col-sm-6">
	<label>Razón Social:</label>
	<input type="text" class="form-control" name="razon_social" value="{{ $accionista->razon_social or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Nombre</label>
	<input type="text" class="form-control" name="nombre" value="{{ $accionista->nombre or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Rut:</label>
	<input type="text" class="form-control" name="rut" value="{{ $accionista->rut or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Calle/Avenida:</label>
	<input type="text" class="form-control" name="domicilio_calle" value="{{ $accionista->domicilio_calle or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Número:</label>
	<input type="text" class="form-control" name="domicilio_numero" value="{{ $accionista->domicilio_numero or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Piso:</label>
	<input type="text" class="form-control" name="domicilio_piso" value="{{ $accionista->domicilio_piso or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Comuna / Distrito:</label>
	<input type="text" class="form-control" name="domicilio_comuna" value="{{ $accionista->domicilio_comuna or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Ciudad:</label>
	<input type="text" class="form-control" name="domicilio_ciudad" value="{{ $accionista->domicilio_ciudad or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Región / Provincia / Barra:</label>
	<input type="text" class="form-control" name="domicilio_region_provincia_barra" value="{{ $accionista->domicilio_region_provincia_barra or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Estado:</label>
	<input type="text" class="form-control" name="domicilio_estado" value="{{ $accionista->domicilio_estado or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>País:</label>
	<input type="text" class="form-control" name="domicilio_pais" value="{{ $accionista->domicilio_pais or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Código Postal / Zip Code:</label>
	<input type="text" class="form-control" name="domicilio_codigo_postal" value="{{ $accionista->domicilio_codigo_postal or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Profesión:</label>
	<input type="text" class="form-control" name="profesion" value="{{ $accionista->profesion or '' }}">
</div>


<div class="form-group col-sm-6">
	<label>Nacionalidad:</label>
	<input type="text" class="form-control" name="nacionalidad" value="{{ $accionista->nacionalidad or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Estado Civil:</label>
	<input type="text" class="form-control" name="estado_civil" value="{{ $accionista->estado_civil or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Mayor de edad:</label>
	<input type="text" class="form-control" name="mayor_de_edad" value="{{ $accionista->mayor_de_edad or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Correo Electrónico:</label>
	<input type="text" class="form-control" name="correo_electronico" value="{{ $accionista->correo_electronico or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Skype:</label>
	<input type="text" class="form-control" name="skype" value="{{ $accionista->skype or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Teléfono:</label>
	<input type="text" class="form-control" name="telefono" value="{{ $accionista->telefono or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Celular:</label>
	<input type="text" class="form-control" name="celular" value="{{ $accionista->celular or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Idiomas:</label>
	<input type="text" class="form-control" name="idiomas" value="{{ $accionista->idiomas or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Actividad que desempeña:</label>
	<input type="text" class="form-control" name="actividad_que_desempena" value="{{ $accionista->actividad_que_desempena or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Filiales:</label>
	<input type="text" class="form-control" name="filiales" value="{{ $accionista->filiales or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Personerías y Proxys:</label>
	<input type="text" class="form-control" name="personerias_y_proxys" value="{{ $accionista->personerias_y_proxys or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Fallecido:</label>
	{{ Form::select('accionista_fallecido',['no' => 'No', 'si' => 'Si'],isset($accionista->accionista_fallecido) ? $accionista->accionista_fallecido : 'no', array('class' => 'form-control control-accionista-fallecido')) }}
</div>



<div class="row">
	<div class="col-md-12 div-accionista-fallecido">
		<div class="form-group col-sm-6">
			<label>Número de Acciones:</label>
			<input type="text" class="form-control" name="fallecido_numero_acciones" value="{{ $accionista->fallecido_numero_acciones or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>Fecha de Fallecimiento:</label>
			<input type="date" class="form-control" name="fallecido_fecha_fallecimiento" value="{{ $accionista->fallecido_fecha_fallecimiento or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>Designación de Albacea y/o Administrador Proindiviso –  Nombre y RUT:</label>
			<input type="text" class="form-control" name="fallecido_designacion_albacea_administrador" value="{{ $accionista->fallecido_designacion_albacea_administrador or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>Cumplido o no los trámites legales de libre transferencia:</label>
			{{ Form::select('fallecido_tramites_libre_transferencia',['no' => 'No', 'si' => 'Si'],isset($accionista->fallecido_tramites_libre_transferencia) ? $accionista->fallecido_tramites_libre_transferencia : 'no', array('class' => 'form-control')) }}
		</div>

		<div class="form-group col-sm-6">
			<label>RUT de comunidad o Número:</label>
			<input type="text" class="form-control" name="fallecido_rut_comunidad" value="{{ $accionista->fallecido_rut_comunidad or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>Nómina de Herederos /  RUT / Porcentaje:</label>
			<input type="text" class="form-control" name="fallecido_nomina_herederos" value="{{ $accionista->fallecido_nomina_herederos or '' }}">
		</div>
	</div>
</div>
