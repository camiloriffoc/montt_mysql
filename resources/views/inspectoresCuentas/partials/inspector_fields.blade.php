
<h2>Inspectores de Cuenta </h2>

<div class="form-group col-sm-6">
	<label>Tipo de Inspector</label>
	{{ Form::select('titular_tipo', ['Titular' => 'Titular', 'Suplente' => 'Suplente'],isset($inspector->titular_tipo) ? $inspector->titular_tipo : '', array('class' => 'form-control')) }}
</div>

<div class="form-group col-sm-6">
	<label>Vigente</label>
	{{ Form::select('titular_vigente', ['Si' => 'Si', 'No' => 'No'],isset($inspector->titular_vigente) ? $inspector->titular_vigente : '', array('class' => 'form-control')) }}
</div>
 @if(isset($inspector->titular_fecha_designacion_file)||isset($inspector->titular_reportes_file)) 	
<div class="form-group col-sm-4">
	<label>Fecha Designación</label>
	<input type="date" class="form-control" id="" placeholder="Fecha designación" name="titular_fecha_designacion" value="{{ $inspector->titular_fecha_designacion or ''}}">
	<input type="file" class="form-control" name="titular_fecha_designacion_file" accept="application/pdf">
</div>
<div class="form-group col-sm-2">
	<br><br><br>
    <p><a target="_blank" href="{{asset('uploads/inspectores/'.$inspector->titular_fecha_designacion_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
</div>

<div class="form-group col-sm-4">
	<label>Reportes</label>
	<input type="text" class="form-control" id=""  placeholder="Vigencia Estatutaria en el Cargo" name="titular_reportes" value="{{ $inspector->titular_reportes or ''}}">
	<input type="file" class="form-control" name="titular_reportes_file" accept="application/pdf">
</div>
<div class="form-group col-sm-2">
	<br><br><br>
    <p><a target="_blank" href="{{asset('uploads/inspectores/'.$inspector->titular_reportes_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
</div>
@else

<div class="form-group col-sm-6">
	<label>Fecha Designación</label>
	<input type="date" class="form-control" id="" placeholder="Fecha designación" name="titular_fecha_designacion" value="{{ $inspector->titular_fecha_designacion or ''}}">
	<input type="file" class="form-control" name="titular_fecha_designacion_file" accept="application/pdf">
</div>

<div class="form-group col-sm-6">
	<label>Reportes</label>
	<input type="text" class="form-control" id=""  placeholder="Vigencia Estatutaria en el Cargo" name="titular_reportes" value="{{ $inspector->titular_reportes or ''}}">
	<input type="file" class="form-control" name="titular_reportes_file" accept="application/pdf">
</div>
@endif

<div class="form-group col-sm-6">
	<label>Fecha Revocación</label>
	<input type="date" class="form-control" id="" placeholder="Fecha renovación" name="titular_fecha_renovacion" value="{{ $inspector->titular_fecha_renovacion or ''}}">
</div>



