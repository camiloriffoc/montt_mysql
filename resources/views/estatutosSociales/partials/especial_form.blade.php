
<div class="form-group col-sm-4">
     <label>Tipo</label>
    {{ Form::select('tipo', ['Constitución' => 'Constitución', 'Modificación' => 'Modificación','Rectificación'=>'Rectificación', 'Saneamiento'=>'Saneamiento','División'=>'División','Fusión'=>'Fusión','Transformación'=>'Transformación','Disolución'=>'Disolución','Otra'=>'Otra'],isset($especial->tipo) ? $especial->tipo : '', array('class' => 'form-control')) }}
    
</div>
<div class="form-group col-sm-4">
	<label>No. Solicitud Registro Electrónico</label>
	<input type="text" class="form-control" name="nro_solicitud" value="{{ $especial->nro_solicitud or '' }}">
</div>
<div class="form-group col-sm-4">
	<label>Fecha Registro Electrónico</label>
	<input type="date" class="form-control" name="fecha_registro" value="{{ $especial->fecha_registro or '' }}">
</div>

<div class="form-group col-sm-3">
	<label>PInformado al SII</label>
	<input type="text" class="form-control" name="informado_sii" value="{{ $especial->informado_sii or '' }}">
</div>
<div class="form-group col-sm-3">
	<label>Informado al Banco</label>
	<input type="text" class="form-control" name="informado_banco" value="{{ $especial->informado_banco or '' }}">
</div>
<div class="form-group col-sm-3">
	<label>Observaciones</label>
	<input type="text" class="form-control" name="observaciones" value="{{ $especial->observaciones or '' }}">
</div>	
<div class="form-group col-sm-3">
	<label>Texto Refundido</label>
	<input type="text" class="form-control" name="texto_refundido" value="{{ $especial->texto_refundido or '' }}">
</div>

