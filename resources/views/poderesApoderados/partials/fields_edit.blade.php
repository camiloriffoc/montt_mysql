  <div class="form-group col-sm-6">
    <label>Nombres</label>
    <input type="text" class="form-control" id="" name="nombre" aria-describedby="emailHelp" placeholder="Nombre" value="{{$poder->nombre or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Apellidos</label>
    <input type="text" class="form-control" id="" name="apellidos" aria-describedby="emailHelp" placeholder="Apellidos" value="{{$poder->apellidos or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Cargo</label>
    <input type="text" class="form-control" id="" name="cargo" aria-describedby="emailHelp" placeholder="Cargo" value="{{$poder->cargo or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Fecha Revocación</label>
    <input type="date" class="form-control" id="" name="fecha_revocacion" aria-describedby="emailHelp" placeholder="Fecha Revocación" value="{{$poder->fecha_revocacion or ''}}">
  </div>

  <div class="form-group col-sm-4">
        <label>Fecha nombramiento</label>
        <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha nombramiento" name="fecha_nombramiento" value="{{$poder->fecha_nombramiento or ''}}">
        <input type="file" class="form-control" name="fecha_nombramiento_file" accept="application/pdf">
    </div>
    <div class="form-group col-sm-2">
      <br><br><br>
      @if($poder->fecha_nombramiento_file)
        <p><a target="_blank" href="{{asset('uploads/poderes/'.$poder->fecha_nombramiento_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
      @endif
    </div>
    <div class="form-group col-sm-4">
        <label>RUT</label>
        <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="RUT" name="rut" value="{{$poder->rut or ''}}">
        <input type="file" class="form-control" name="rut_file" accept="application/pdf">
    </div>
    <div class="form-group col-sm-2">
      <br><br><br>
      @if($poder->rut_file)
      <p><a target="_blank" href="{{asset('uploads/poderes/'.$poder->rut_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
      @endif
    </div>

  

  <div class="form-group col-sm-6">
    <label>Domicilio</label>
    <input type="text" class="form-control" id="" name="domicilio" aria-describedby="emailHelp" placeholder="Domicilio" value="{{$poder->domicilio or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Numero</label>
    <input type="text" class="form-control" id="" name="numero" aria-describedby="emailHelp" placeholder="NRO" onKeyPress="return soloNumeros(event)" value="{{$poder->numero or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Piso</label>
    <input type="text" class="form-control" id="" name="piso" aria-describedby="emailHelp" placeholder="Piso" value="{{$poder->piso or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Comuna</label>
    <input type="text" class="form-control" id="" name="comuna" aria-describedby="emailHelp" placeholder="Comuna/Distrito" value="{{$poder->comuna or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Cuidad</label>
    <input type="text" class="form-control" id="" name="ciudad" aria-describedby="emailHelp" placeholder="Cuidad" value="{{$poder->ciudad or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Región</label>
    <input type="text" class="form-control" id="" name="region" aria-describedby="emailHelp" placeholder="Región" value="{{$poder->region or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Estado</label>
    <input type="text" class="form-control" id="" name="estado" aria-describedby="emailHelp" placeholder="Estado" value="{{$poder->estado or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>País</label>
    <input type="text" class="form-control" id="" name="pais" aria-describedby="emailHelp" placeholder="País" value="{{$poder->pais or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Codigo Postal</label>
    <input type="text" class="form-control" id="" name="codigo_postal" aria-describedby="emailHelp" placeholder="Codigo Postal" value="{{$poder->codigo_postal or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Profesion</label>
    <input type="text" class="form-control" id="" name="profesion" aria-describedby="emailHelp" placeholder="Profesion" value="{{$poder->profesion or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Nacionalidad</label>
    <input type="text" class="form-control" id="" name="nacionalidad" aria-describedby="emailHelp" placeholder="Nacionalidad" value="{{$poder->nacionalidad or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Estado Civil</label>
    <input type="text" class="form-control" id="" name="estado_civil" aria-describedby="emailHelp" placeholder="Estado Civil" value="{{$poder->estado_civil or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Correo Electronico</label>
    <input type="text" class="form-control" id="" name="correo_electronico" aria-describedby="emailHelp" placeholder="Correo Electrónico" value="{{$poder->correo_electronico or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Skype</label>
    <input type="text" class="form-control" id="" name="skype" aria-describedby="emailHelp" placeholder="Skype" value="{{$poder->skype or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Telefono</label>
    <input type="text" class="form-control" id="" name="telefono" aria-describedby="emailHelp" placeholder="Teléfono" onKeyPress="return soloNumeros(event)" value="{{$poder->telefono or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Celular</label>
    <input type="text" class="form-control" id="" name="celular" aria-describedby="emailHelp" placeholder="Celular" onKeyPress="return soloNumeros(event)" value="{{$poder->celular or ''}}"> 
  </div>
  
  <div class="form-group col-sm-6">
    <label>Accionistas que lo nombro</label>
    <input type="text" class="form-control" name="accionista_que_lo_nombro" placeholder="Accionistas que lo nombro" value="{{$poder->accionista_que_lo_nombro or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Renovaciones en el cargo</label>
    <input type="text" class="form-control" id="" name="renovaciones_en_el_cargo" aria-describedby="emailHelp" placeholder="Renovaciones en el cargo" value="{{$poder->renovaciones_en_el_cargo or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
  
    <label>Fecha de Otorgamiento de Poder</label>
    <input type="date" class="form-control" id="" name="fecha_ototrgamiento_poder" aria-describedby="emailHelp" placeholder="fecha de ototrgamiento de poder" value="{{$poder->fecha_ototrgamiento_poder or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Vigencia de Poder Sujeto a Plazo</label>
    {{ Form::select('vigencia_poder_plazo', ['Si' => 'Si', 'No' => 'No'],isset($poder->vigencia_poder_plazo) ? $poder->vigencia_poder_plazo : '', array('class' => 'form-control')) }}
  </div>

  <div class="form-group col-sm-6">
  
    <label>Es Accionista</label>
    <input type="text" class="form-control" id="" name="es_accionista" aria-describedby="emailHelp" placeholder="Es Accionista" value="{{$poder->es_accionista or ''}}"> 

  </div>
  <div class="form-group col-sm-6">
    <label>Asistencia</label>
    <input type="text" class="form-control" id="" name="asistencia" aria-describedby="emailHelp" placeholder="Asistencia" value="{{$poder->asistencia or ''}}"> 
  </div>


  <div class="form-group col-sm-6">
    <label>Periodo de Vigencia</label>
    <input type="date" class="form-control" id="" name="periodo_vigencia" aria-describedby="emailHelp" placeholder="periodo_vigencia" value="{{$poder->periodo_vigencia or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Expertise</label>
    <input type="text" class="form-control" id="" name="expertise" aria-describedby="emailHelp" placeholder="Expertise" value="{{$poder->expertise or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Se Repite en Filiales</label>
    <input type="text" class="form-control" id="" name="se_repite_en_filiales" aria-describedby="emailHelp" placeholder="Se repite en filiales" value="{{$poder->se_repite_en_filiales or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Actividad que Desempeña</label>
    <input type="text" class="form-control" id="" name="actividad_que_desempeña" aria-describedby="emailHelp" placeholder="Actividad que desempeña" value="{{$poder->actividad_que_desempeña or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Idiomas</label>
    <input type="text" class="form-control" id="" name="idiomas" aria-describedby="emailHelp" placeholder="Idiomas" value="{{$poder->idiomas or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Comisiones que Integra</label>
    <input type="text" class="form-control" id="" name="comisiones_que_integra" aria-describedby="emailHelp" placeholder="Comisiones que integra" value="{{$poder->comisiones_que_integra or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Forma de Actuar</label>
    {{ Form::select('forma_de_actuar',['Unipersonal' => 'Unipersonal', 'Conjunta' => 'Conjunta'],isset($director->forma_de_actuar) ? $director->forma_de_actuar : '', array('class' => 'form-control')) }}
  </div>
  <div class="form-group col-sm-6">
    <label>Tipo Atribuciones</label>
    <input type="text" class="form-control" id="" name="tipo_atribuciones" aria-describedby="emailHelp" placeholder="Tipo Atribuciones" value="{{$poder->tipo_atribuciones or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Instituciones en las que tiene poder</label>
    <input type="text" class="form-control" id="" name="instituciones_tiene_poder" aria-describedby="emailHelp" placeholder="Instituciones en las que tiene poder" value="{{$poder->instituciones_tiene_poder or ''}}"> 
  </div>

  
  <div class="form-group col-sm-4">
    <label>Instrumento en el cual consta el poder</label>
    <input type="text" class="form-control" id="" name="instrumento_consta_poder" aria-describedby="emailHelp" placeholder="Instrumento en el cual consta el poder" value="{{$poder->instrumento_consta_poder or ''}}">
    <input type="file" class="form-control" name="instrumento_consta_poder_file" accept="application/pdf"> 
    
  </div>

  <div class="form-group col-sm-2">
    <br><br><br>
    @if($poder->instrumento_consta_poder_file)
    <p><a target="_blank" href="{{asset('uploads/poderes/'.$poder->instrumento_consta_poder_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
    @endif
  </div>

  <div class="form-group col-sm-4">
    <label>Poder Inscrito en CBR</label>
    <input type="text" class="form-control" id="" name="poder_inscrito_cbr" aria-describedby="emailHelp" placeholder="Poder inscrito en CBR" value="{{$poder->poder_inscrito_cbr or ''}}"> 
    <input type="file" class="form-control" name="poder_inscrito_cbr_file" accept="application/pdf">
   
  </div>

  <div class="form-group col-sm-2">
    <br><br><br>
    @if($poder->poder_inscrito_cbr_file) 
      <p><a target="_blank" href="{{asset('uploads/poderes/'.$poder->poder_inscrito_cbr_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
    @endif
  </div>

  <div class="form-group col-sm-6">
    <label>Es Director</label>
    <input type="text" class="form-control" id="" name="es_director" aria-describedby="emailHelp" placeholder="Es Director" value="{{$poder->es_director or ''}}"> 
  </div>
  

  <div class="form-group col-sm-6">
    <label>Límite de facultades</label>
    <input type="text" class="form-control" id="" name="limite_de_facultades" aria-describedby="emailHelp" placeholder="Límite de facultades" value="{{$poder->limite_de_facultades or ''}}"> 
  </div>

  
  <div class="form-group col-sm-4">
    <label>Instrumento en el cual consta la revocación del poder</label>
    <input type="text" class="form-control" id="" name="instrumento_revocacion_de_poder" aria-describedby="emailHelp" placeholder="Instrumento revocación de poder" value="{{$poder->instrumento_revocacion_de_poder or ''}}"> 
    <input type="file" class="form-control" name="instrumento_revocacion_de_poder_file" accept="application/pdf">
  
  </div>

  <div class="form-group col-sm-2">
    <br><br><br>
    @if($poder->instrumento_revocacion_de_poder_file)
      <p><a target="_blank" href="{{asset('uploads/poderes/'.$poder->instrumento_revocacion_de_poder_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
    @endif
  </div>

  <div class="form-group col-sm-4">
   <label>Inscripción de Revocaciones en CBR</label>
    <input type="text" class="form-control" id="" name="inscripcion_renovacion_cbr" aria-describedby="emailHelp" placeholder="Inscripción de revocaciones en CBR" value="{{$poder->inscripcion_renovacion_cbr or ''}}">
    <input type="file" class="form-control" name="inscripcion_renovacion_cbr_file" accept="application/pdf">
  </div>

  <div class="form-group col-sm-2">
    <br><br><br>
    @if($poder->inscripcion_renovacion_cbr_file)
    <p><a target="_blank" href="{{asset('uploads/poderes/'.$poder->inscripcion_renovacion_cbr_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
    @endif
  </div>
  <!-- <div class="form-group col-sm-6">
    <label>Poderes Revocados</label>
    <input type="text" class="form-control" id="" name="poderes_revocados" aria-describedby="emailHelp" placeholder="Poderes revocados" value="{{$poder->poderes_revocados or ''}}">
  </div>  -->


  <div class="form-group col-sm-6">
    <label>Fecha Revocación de Poder</label>
    <input type="date" class="form-control" id="" name="fecha_revocacion_de_poder" aria-describedby="emailHelp" placeholder="Fecha Revocación de poder" value="{{$poder->fecha_revocacion_de_poder or ''}}">
  </div>
  
  <div class="form-group col-sm-6">
    <label>Firma Bancaria</label>
    <input type="text" class="form-control" id="" name="firma_bancaria" aria-describedby="emailHelp" placeholder="Firma Bancaria" value="{{$poder->firma_bancaria or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Informado a Bancos</label>
    <input type="text" class="form-control" id="" name="informado_bancos" aria-describedby="emailHelp" placeholder="Informado a Bancos" value="{{$poder->informado_bancos or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Revocación informada a Bancos</label>
    <input type="text" class="form-control" id="" name="revocacion_informada_bancos" aria-describedby="emailHelp" placeholder="Revocación informada a Bancos" value="{{$poder->revocacion_informada_bancos or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Remuneraciones de los Apoderados</label>
    <input type="text" class="form-control" id="" name="remuneraciones_de_apoderados" aria-describedby="emailHelp" placeholder="Remuneraciones de los Apoderados" value="{{$poder->remuneraciones_de_apoderados or '' }}" value="{{$poder->pais or ''}}"> 
  </div>

  <div class="form-group col-sm-12">
    <input type="submit" class="btn btn-info" value="Guardar">
  </div>


<script src="{{ asset('js/poderesApoderados.js') }}"></script>