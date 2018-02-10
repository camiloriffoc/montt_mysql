

@if(isset($inspector->sociedad_eximida_file)||isset($inspector->señala_mecanismo_file))

<div class="form-group col-sm-8">
	<label>SOCIEDAD EXIMIDA DE LA OBLIGACIÓN DE NOMBRAMIENTO DE INSPECTORES DE CUENTA POR APLICACIÓN DEL ARTÍCULO 51:</label>
	{{ Form::select('sociedad_eximida', ['Si' => 'Si', 'No' => 'No'],isset($inspector->sociedad_eximida) ? $inspector->sociedad_eximida : '', array('class' => 'form-control')) }}
	<input type="file" class="form-control" name="sociedad_eximida_file" accept="application/pdf">
</div>

<div class="form-group col-sm-4">

	<br><br><br>
    <p><a target="_blank" href="{{asset('uploads/inspectores/'.$inspector->sociedad_eximida_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>

</div>

<div class="form-group col-sm-8">
  <label>SEÑALA OTRO MECANISMO DE CONTROL POR ART.51:</label>
  {{ Form::select('señala_mecanismo', ['Si' => 'Si', 'No' => 'No'],isset($inspector->señala_mecanismo) ? $inspector->señala_mecanismo : '', array('class' => 'form-control')) }}
  <input type="file" class="form-control" name="señala_mecanismo_file" accept="application/pdf">
</div>

<div class="form-group col-sm-4">

	<br><br><br>
    <p><a target="_blank" href="{{asset('uploads/inspectores/'.$inspector->señala_mecanismo_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>

</div>

@else

<div class="form-group col-sm-12">
  <label>SOCIEDAD EXIMIDA DE LA OBLIGACIÓN DE NOMBRAMIENTO DE INSPECTORES DE CUENTA POR APLICACIÓN DEL ARTÍCULO 51:</label>
  {{ Form::select('sociedad_eximida', ['Si' => 'Si', 'No' => 'No'],isset($inspector->sociedad_eximida) ? $inspector->sociedad_eximida : '', array('class' => 'form-control')) }}
  <input type="file" class="form-control" name="sociedad_eximida_file" accept="application/pdf">
</div>

<div class="form-group col-sm-12">
  <label>SEÑALA OTRO MECANISMO DE CONTROL POR ART.51:</label>
  {{ Form::select('señala_mecanismo', ['Si' => 'Si', 'No' => 'No'],isset($inspector->señala_mecanismo) ? $inspector->señala_mecanismo : '', array('class' => 'form-control')) }}
  <input type="file" class="form-control" name="señala_mecanismo_file" accept="application/pdf">
</div>

@endif

 
