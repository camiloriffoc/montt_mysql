<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $fiscalizador->sociedad_id}}">

<div class="form-group col-sm-6">
	<label>Auditores Externo:</label>
	<input type="text" class="form-control" name="auditores_externos" value="{{ $fiscalizador->auditores_externos or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Vigente:</label>
	{{ Form::select('vigente',['si' => 'Si', 'no' => 'No'],isset($fiscalizador->vigente) ? $fiscalizador->vigente : 'si', array('class' => 'form-control')) }}
</div>

<div class="form-group col-sm-6">
	<label>Fecha Designación:</label>
	<input type="date" class="form-control" name="fecha_designacion" value="{{ $fiscalizador->fecha_designacion or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Fecha Revocación:</label>
	<input type="date" class="form-control" name="fecha_revocacion" value="{{ $fiscalizador->fecha_revocacion or '' }}">
</div>