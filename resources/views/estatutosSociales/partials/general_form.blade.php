<br><br>
<div class="form-group col-sm-6">
     <label>Tipo</label>
    {{ Form::select('tipo', ['Constitución' => 'Constitución', 'Modificación' => 'Modificación','Rectificación'=>'Rectificación', 'Saneamiento'=>'Saneamiento','División'=>'División','Fusión'=>'Fusión','Transformación'=>'Transformación','Disolución'=>'Disolución','Otra'=>'Otra'],isset($general->tipo) ? $general->tipo : '', array('class' => 'form-control')) }}
    
</div>
<div class="form-group col-sm-6">
	<label>Fecha/Repertorio/Notaria</label>
	<input type="text" class="form-control" name="fecha_repertorio_notaria" value="{{$general->fecha_repertorio_notaria or ''}}">
</div>
<div class="form-group col-sm-6">
	<label>Inscripcion Registro de Comercio Fojas No Año</label>
	<input type="text" class="form-control" name="inscripcion_registro" value="{{$general->inscripcion_registro or ''}}">
</div>

<div class="form-group col-sm-6">
	<label>Publicación</label>
	<input type="text" class="form-control" name="publicacion" value="{{$general->publicacion or ''}}">
</div>
<div class="form-group col-sm-6">
	<label>Protocolización</label>
	<input type="text" class="form-control" name="protocolizacion" value="{{$general->protocolizacion or ''}}">
</div>
<div class="form-group col-sm-6">
	<label>Informado al SII</label>
	<input type="text" class="form-control" name="informado_sii" value="{{$general->informado_sii or ''}}">
</div>	
<div class="form-group col-sm-6">
	<label>Informado al banco</label>
	<input type="text" class="form-control" name="informado_banco" value="{{$general->informado_banco or ''}}">
</div>
<div class="form-group col-sm-6">
	<label>Observaciones</label>
	<input type="text" class="form-control" name="observaciones" value="{{$general->observaciones or ''}}">
</div>
<div class="form-group col-sm-3">
	<label>Adjunto Escritura</label>
	<input type="file" class="form-control" name="escritura_file">
</div>
<div class="form-group col-sm-1">
	@if(isset($general->escritura_file))
	<br><br><br>
    	<p><a target="_blank" href="{{asset('uploads/estatutos/'.$general->escritura_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
	@endif
</div>
<div class="form-group col-sm-3">
	<label>Texto Refundido</label>
	<input type="text" class="form-control" name="texto_refundido" value="{{$general->texto_refundido or ''}}">
</div>
<div class="form-group col-sm-3">
	<label>adjunto texto refundido</label>
	<input type="file" class="form-control" name="texto_refundido_file">
</div>
<div class="form-group col-sm-1">
	@if(isset($general->texto_refundido_file))
	<br><br><br>
    	<p><a target="_blank" href="{{asset('uploads/estatutos/'.$general->texto_refundido_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
	@endif
</div>
