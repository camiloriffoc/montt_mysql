
<div class="form-group col-sm-12">
  <label>SOCIEDAD EXIMIDA DE LA OBLIGACIÓN DE NOMBRAMIENTO DE INSPECTORES DE CUENTA POR APLICACIÓN DEL ARTÍCULO 51:</label>
  {{ Form::select('sociedad_eximida', ['Si' => 'Si', 'No' => 'No'],isset($inspector->sociedad_eximida) ? $inspector->sociedad_eximida : '', array('class' => 'form-control')) }}
</div>

<div class="form-group col-sm-12">
  <label>SEÑALA OTRO MECANISMO DE CONTROL POR ART.51:</label>
  {{ Form::select('señala_mecanismo', ['Si' => 'Si', 'No' => 'No'],isset($inspector->señala_mecanismo) ? $inspector->señala_mecanismo : '', array('class' => 'form-control')) }}
</div>

 
