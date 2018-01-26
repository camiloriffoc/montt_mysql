
<div class="form-group col-sm-6">
	<label>Tipo:</label>
	 {{ Form::select('tipo_accionista',['natural' => 'Persona Natural', 'juridica' => 'Persona jurídica'],isset($accionista->tipo_accionista) ? $accionista->tipo_accionista : 'natural', array('class' => 'form-control')) }}
</div>

<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or ''}}">

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
	<label>Estado:</label>
	<input type="text" class="form-control" name="domicilio_estado" value="{{ $accionista->domicilio_comuna or '' }}">
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



