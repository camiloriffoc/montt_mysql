
<h2>Agregar Inspector de Cuenta Titular</h2>

<div class="form-group col-sm-6">
	<label>Vigente</label>
	{{ Form::select('titular_vigente', ['Si' => 'Si', 'No' => 'No'],isset($inspector->titular_vigente) ? $inspector->titular_vigente : '', array('class' => 'form-control')) }}
</div>
  	
<div class="form-group col-sm-6">
	<label>Fecha Designación</label>
	<input type="date" class="form-control" id="" placeholder="Fecha designación" name="titular_fecha_designacion" value="{{ $inspector->titular_fecha_designacion or ''}}">
</div>

<div class="form-group col-sm-6">
	<label>Fecha Renovación</label>
	<input type="date" class="form-control" id="" placeholder="Fecha renovación" name="titular_fecha_renovacion" value="{{ $inspector->titular_fecha_renovacion or ''}}">
</div>

<div class="form-group col-sm-6">
	<label>Reportes</label>
	<input type="text" class="form-control" id=""  placeholder="Vigencia Estatutaria en el Cargo" name="titular_reportes" value="{{ $inspector->titular_reportes or ''}}">
</div>


<h2>Agregar Inspector de Cuenta Suplente</h2>

<div class="form-group col-sm-6">
	<label>Vigente</label>
	{{ Form::select('suplente_vigente', ['Si' => 'Si', 'No' => 'No'],isset($inspector->suplente_vigente) ? $inspector->suplente_vigente : '', array('class' => 'form-control')) }}
</div>
  	
<div class="form-group col-sm-6">
	<label>Fecha Designación</label>
	<input type="date" class="form-control" id="" placeholder="Fecha designación" name="suplente_fecha_designacion" value="{{ $inspector->suplente_fecha_designacion or ''}}">
</div>

<div class="form-group col-sm-6">
	<label>Fecha Renovación</label>
	<input type="date" class="form-control" id="" placeholder="Fecha renovación" name="suplente_fecha_renovacion" value="{{ $inspector->suplente_fecha_renovacion or ''}}">
</div>

<div class="form-group col-sm-6">
	<label>Reportes</label>
	<input type="text" class="form-control" id=""  placeholder="Vigencia Estatutaria en el Cargo" name="suplente_reportes" value="{{ $inspector->suplente_reportes or ''}}">
</div>

