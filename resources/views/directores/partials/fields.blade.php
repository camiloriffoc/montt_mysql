
  @if($id=='no')
  <input type="hidden" name="id" value="{{$director->id}}">
  @else
  <input type="hidden" name="directorio_id" value="{{$id}}">
  @endif
  <div class="form-group col-sm-6">
    <label>Nombres:</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nombre" name="nombres" value="{{$director->nombres or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Apellidos:</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Apellido" name="apellidos" value="{{$director->apellidos or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Cargo</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Cargo" name="cargo" value="{{$director->cargo or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Tipo de Director</label>
    {{ Form::select('tipo_de_director', ['Director Titular' => 'Director Titular', 'Director Suplente' => 'Director Suplente'],isset($director->tipo_de_director) ? $director->tipo_de_director : '', array('class' => 'form-control')) }}
  </div>
  
    <div class="form-group col-sm-6">
        <label>Fecha nombramiento</label>
        <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha nombramiento" name="fecha_nombramiento" value="{{$director->fecha_nombramiento or ''}}">
        <input type="file" class="form-control" name="fecha_nombramiento_file" accept="application/pdf">
    </div>
    <div class="form-group col-sm-6">
        <label>RUT</label>
        <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="RUT" name="rut" value="{{$director->rut or ''}}">
        <input type="file" class="form-control" name="rut_file" accept="application/pdf">
    </div>


  <div class="form-group col-sm-6">
    <label>Fecha vencimiento en el cargo</label>
    <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha vencimiento en el cargo" name="fecha_de_vencimiento" value="{{$director->fecha_de_vencimiento or ''}}">
  
  </div>

  <div class="form-group col-sm-6">
    <label>Domicilio</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Domicilio" name="domicilio" value="{{$director->domicilio or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Numero</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="NRO" onKeyPress="return soloNumeros(event)" name="numero" value="{{$director->numero or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Piso / Oficina</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Piso" name="piso_oficina" value="{{$director->piso_oficina or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Comuna/Distrito</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Comuna/Distrito" name="comuna_distrito" value="{{$director->comuna_distrito or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Ciudad</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Cuidad" name="ciudad" value="{{$director->ciudad or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Región</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Región" name="region" value="{{$director->region or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Estado</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Estado" name="estado" value="{{$director->estado or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>País</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="País" name="pais" value="{{$director->pais or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Codigo Postal</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Codigo Postal" name="codigo_postal" value="{{$director->codigo_postal or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Profesión</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Profesion" name="profesion" value="{{$director->profesion or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Nacionalidad</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nacionalidad" name="nacionalidad" value="{{$director->nacionalidad or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Estado Civil</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Estado Civil" name="estado_civil" value="{{$director->estado_civil or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Correo Electronico</label>
    <input type="email" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Correo Electrónico" name="correo_electronico" value="{{$director->correo_electronico or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Skype</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Skype" name="skype" value="{{$director->skype or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Teléfono</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Teléfono" onKeyPress="return soloNumeros(event)" name="telefono" value="{{$director->telefono or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Celular</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Celular" onKeyPress="return soloNumeros(event)" name="celular" value="{{$director->celular or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Accionistas que lo nombro:</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Accionistas que lo nombro" name="accionistas_que_lo_nombro" value="{{$director->accionistas_que_lo_nombro or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Renovaciones</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Renovaciones en el cargo" name="renovaciones" value="{{$director->renovaciones or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Vigencia</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Vigencia en el cargo" name="vigencia" value="{{$director->vigencia or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Asistencia</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Asistencia" name="asistencia" value="{{$director->asistencia or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Expertise</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Expertise" name="expertise" value="{{$director->expertise or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Repetición de Filiales</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Se repite en filiales" name="repeticion_de_filiales" value="{{$director->repeticion_de_filiales or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Actividad que Desempeña</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Actividad que desempeña" name="actividad_que_desempeña" value="{{$director->actividad_que_desempeña or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Idiomas</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Idiomas" name="idiomas" value="{{$director->idiomas or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Comisiones que Integra</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Comisiones que integra" name="comisiones_que_integra" value="{{$director->comisiones_que_integra or ''}}">
  </div>
  
  <div class="form-group col-sm-6">
    <label>Con o Sin Poder</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Con o sin poder" name="con_o_sin_poder" value="{{$director->con_o_sin_poder or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Participación Grupo Externo</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Participación grupo externo" name="participacion_grupo_externo" value="{{$director->participacion_grupo_externo or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Presidente de Directorio</label>
    {{ Form::select('presidente_del_directorio', ['No' => 'No', 'Si' => 'Si'],isset($director->presidente_del_directorio) ? $director->presidente_del_directorio : '', array('class' => 'form-control')) }}
  </div>

  <div class="form-group col-sm-6">
    <label>Es Secretario:</label>
    {{ Form::select('es_secretario', ['Si' => 'Si', 'No' => 'No'],isset($director->es_secretario) ? $director->es_secretario : '', array('class' => 'form-control')) }}
  </div>  
  
   <div class="form-group col-sm-6">
    <label>Es Gerente General o Representante:</label>
    {{ Form::select('es_gerente_general_o_representante', ['Si' => 'Si', 'No' => 'No'],isset($director->es_gerente_general_o_representante) ? $director->es_gerente_general_o_representante : '', array('class' => 'form-control')) }}
  </div>