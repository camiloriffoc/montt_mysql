<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $junta_accionista->sociedad_id}}">

<div class="form-group col-sm-6">
	<label>Acciones con derecho a asistir a las juntas:</label>
	<input type="text" class="form-control" name="acciones_derecho_asistir" value="{{ $junta_accionista->acciones_derecho_asistir or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Serie de acciones con derecho a voto a las juntas:</label>
	<input type="text" class="form-control" name="serie_acciones_derecho_voto" value="{{ $junta_accionista->serie_acciones_derecho_voto or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Convocatoria:</label>
	<input type="text" class="form-control"  name="convocatoria" value="{{ $junta_accionista->convocatoria or ''}}">
</div>

<div class="form-group col-sm-6">
	<label>Diario Publicaciones:</label>
	<input type="text" class="form-control"  name="diario_publicaciones" value="{{ $junta_accionista->diario_publicaciones or ''}}">
</div>

<div class="row">
	<div class="col-md-12">
		<h1 class="text-primary">Quorum para sesionar 1° y 2° citación</h1>
	</div>
</div>

<div class="row">
	<div class="form-group col-sm-12">
		<label>Primera Citación:</label>
		<input type="text" class="form-control"  name="primera_citacion" value="{{ $junta_accionista->primera_citacion or ''}}">
	</div>
	<div class="form-group col-sm-6">
		<label>Primera Citación Adjunto:</label>
		<input type="file" class="form-control" accept='application/pdf' name="primera_citacion_adjunto" value="{{ $junta_accionista->primera_citacion_adjunto or ''}}">
	</div>
	<div class="form-group col-sm-6">
		@if(isset($junta_accionista->primera_citacion_adjunto))
		<br>
		<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/junta_accionista/'.$junta_accionista->primera_citacion_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
		<br>
		<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>


</div>

<div class="row">
	<div class="form-group col-sm-12">
		<label>Segunda Citación:</label>
		<input type="text" class="form-control"  name="segunda_citacion" value="{{ $junta_accionista->segunda_citacion or ''}}">
	</div>
	<div class="form-group col-sm-6">
		<label>Segunda Citación Adjunto:</label>
		<input type="file" class="form-control" accept='application/pdf' name="segunda_citacion_adjunto" value="{{ $junta_accionista->segunda_citacion_adjunto or ''}}">
	</div>
	<div class="form-group col-sm-6">
		@if(isset($junta_accionista->segunda_citacion_adjunto))
		<br>
		<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/junta_accionista/'.$junta_accionista->segunda_citacion_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
		<br>
		<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>
</div>

<div class="row">
	<div class="form-group col-sm-12">
		<label>Quórum para adoptar acuerdos:</label>
		<input type="text" class="form-control"  name="quorum_adoptar_acuerdos" value="{{ $junta_accionista->quorum_adoptar_acuerdos or ''}}">
	</div>
	<div class="form-group col-sm-6">
		<label>Quórum para adoptar acuerdos Adjunto:</label>
		<input type="file" class="form-control" accept='application/pdf' name="quorum_adoptar_acuerdos_adjunto" value="{{ $junta_accionista->quorum_adoptar_acuerdos_adjunto or ''}}">
	</div>
	<div class="form-group col-sm-6">
		@if(isset($junta_accionista->quorum_adoptar_acuerdos_adjunto))
		<br>
		<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/junta_accionista/'.$junta_accionista->quorum_adoptar_acuerdos_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
		<br>
		<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>
</div>

<div class="row">
	<div class="form-group col-sm-12">
		<label>Quórum especiales:</label>
		<input type="text" class="form-control"  name="quorum_especiales" value="{{ $junta_accionista->quorum_especiales or ''}}">
	</div>
	<div class="form-group col-sm-6">
		<label>Quórum especiales Adjunto:</label>
		<input type="file" class="form-control" accept='application/pdf' name="quorum_especiales_adjunto" value="{{ $junta_accionista->quorum_especiales_adjunto or ''}}">
	</div>
	<div class="form-group col-sm-6">
		@if(isset($junta_accionista->quorum_especiales_adjunto))
		<br>
		<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/junta_accionista/'.$junta_accionista->quorum_especiales_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
		<br>
		<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>
</div>
