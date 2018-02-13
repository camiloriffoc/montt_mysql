<!-- ID de la SOCIEDAD -->
<input type="hidden" name="sociedad_id" value="{{$sociedad->id or $otros_pactos_especiales->sociedad_id}}">
<div class="row">
	<div class="form-group col-sm-6">
		<label>Observaciones:</label>
		<textarea class="form-control" name="observaciones">{{ $otros_pactos_especiales->observaciones or '' }} </textarea> 
	</div>

	<div class="form-group col-sm-6">
		<label>Fecha:</label>
		<input type="date" class="form-control" name="fecha" value="{{ $otros_pactos_especiales->fecha or '' }}">
	</div>

</div>


<div class="row">
	<div class="form-group col-sm-6">
		<label>Adjunto:</label>
		<input type="file" class="form-control" accept='application/pdf' name="otros_pactos_adjunto" value="{{ $otros_pactos_especiales->otros_pactos_adjunto or ''}}">
	</div>
	<div class="form-group col-sm-6">
		@if(isset($otros_pactos_especiales->otros_pactos_adjunto))
		<br>
		<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/otros_pactos_especiales/'.$otros_pactos_especiales->otros_pactos_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
		<br>
		<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>

</div>
