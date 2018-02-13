<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $forma_resolucion_conflictos->sociedad_id}}">

<div class="form-group col-sm-6">
	<label>Justicia Ordinaria o arbitraje:</label>
	<input type="text" class="form-control" name="justicia_ordinaria_arbitraje" value="{{ $forma_resolucion_conflictos->justicia_ordinaria_arbitraje or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Tipo de Arbitro:</label>
	<input type="text" class="form-control" name="tipo_arbitro" value="{{ $forma_resolucion_conflictos->tipo_arbitro or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Forma de Designación:</label>
	<input type="text" class="form-control" name="forma_designacion" value="{{ $forma_resolucion_conflictos->forma_designacion or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Designación arbitros:</label>
	<input type="text" class="form-control" name="designacion_arbitros" value="{{ $forma_resolucion_conflictos->designacion_arbitros or '' }}">
</div>


<div class="form-group col-sm-6">
	<label>Clausula de Estatutos:</label>
	<input type="file" class="form-control" accept='application/pdf' name="clausula_estatutos_adjunto" value="{{ $forma_resolucion_conflictos->clausula_estatutos_adjunto or ''}}">
</div>
<div class="form-group col-sm-6">
	@if(isset($forma_resolucion_conflictos->clausula_estatutos_adjunto))
	<br>
	<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/forma_resolucion_conflictos/'.$forma_resolucion_conflictos->clausula_estatutos_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
	@else
	<br>
	<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
	@endif
</div>