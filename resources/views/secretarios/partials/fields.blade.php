

  <div class="form-group col-sm-6">
    <label>Nombres:</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nombre" name="nombres" value="{{ $secretario->nombres or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Apellidos:</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nombre" name="apellidos" value="{{ $secretario->apellidos or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Cargo</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Cargo" name="cargo" value="{{ $secretario->cargo or ''}}">
  </div>

  <div class="form-group col-sm-12">
    <label>Fecha nombramiento</label>
    <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha nombramiento" name="fecha_nombramiento" value="{{ $secretario->fecha_nombramiento or ''}}">
  <!--   {{ Form::file('adjunto_fecha_nombramiento',['accept'=>'application/pdf','class'=>'form-control']) }} -->
  </div>

  <div class="form-group col-sm-6">
    <label>Fecha vencimiento en el cargo</label>
    <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha vencimiento en el cargo" name="fecha_de_vencimiento" value="{{ $secretario->fecha_de_vencimiento or ''}}">
  </div>


  <div class="form-group col-sm-6">
    <br>
    <br>
    <br>
  </div>

  <div class="form-group col-sm-12">
    <label>RUT</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="RUT" name="rut" value="{{ $secretario->rut or ''}}">
    <!-- {{Form::file('adjunto_rut',['accept'=>'application/pdf','class'=>'form-control']) }} -->
  </div>

  <div class="form-group col-sm-6">
    <label>Domicilio</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Domicilio" name="domicilio" value="{{ $secretario->domicilio or ''}}">
    <br>
    <label>Numero</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="NRO" onKeyPress="return soloNumeros(event)" name="numero" value="{{ $secretario->numero or ''}}">
    <br>
    <label>Piso / Oficina</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Piso" name="piso_oficina" value="{{ $secretario->piso_oficina or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Comuna/Distrito</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Comuna/Distrito" name="comuna_distrito" value="{{ $secretario->comuna_distrito or ''}}">
    <br>
    <label>Ciudad</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Cuidad" name="ciudad" value="{{ $secretario->ciudad or ''}}">
    <br>
    <label>Región</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Región" name="region" value="{{ $secretario->region or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Estado</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Estado" name="estado" value="{{ $secretario->estado or ''}}">
    <br>
    <label>País</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="País" name="pais" value="{{ $secretario->pais or ''}}">
    <br>
    <label>Codigo Postal</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Codigo Postal" name="codigo_postal" value="{{ $secretario->codigo_postal or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Profesión</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Profesion" name="profesion" value="{{ $secretario->profesion or ''}}">
    <br>
    <label>Nacionalidad</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nacionalidad" name="nacionalidad" value="{{ $secretario->nacionalidad or ''}}">
    <br>
    <label>Estado Civil</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Estado Civil" name="estado_civil" value="{{ $secretario->estado_civil or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Correo Electronico</label>
    <input type="email" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Correo Electrónico" name="correo_electronico" value="{{ $secretario->correo_electronico or ''}}">
    <br>
    <label>Skype</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Skype" name="skype" value="{{ $secretario->skype or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Teléfono</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Teléfono" onKeyPress="return soloNumeros(event)" name="telefono" value="{{ $secretario->telefono or ''}}">
    <br>
    <label>Celular</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Celular" onKeyPress="return soloNumeros(event)" name="celular" value="{{ $secretario->celular or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Accionistas que lo nombro:</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Accionistas que lo nombro" name="accionistas_que_lo_nombro" value="{{ $secretario->accionistas_que_lo_nombro or ''}}">
    <br>
    <label>Renovaciones</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Renovaciones en el cargo" name="renovaciones" value="{{ $secretario->renovaciones or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Vigencia</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Vigencia en el cargo" name="vigencia" value="{{ $secretario->vigencia or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Asistencia</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Asistencia" name="asistencia" value="{{ $secretario->asistencia or ''}}">
    <br>
    <label>Expertise</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Expertise" name="expertise" value="{{ $secretario->expertise or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Repetición de Filiales</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Se repite en filiales" name="repeticion_de_filiales" value="{{ $secretario->repeticion_de_filiales or ''}}">
    <br>
    <label>Actividad que Desempeña</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Actividad que desempeña" name="actividad_que_desempeña" value="{{ $secretario->actividad_que_desempeña or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Idiomas</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Idiomas" name="idiomas" value="{{ $secretario->idiomas or ''}}">
    <br>
    <label>Comisiones que Integra</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Comisiones que integra" name="comisiones_que_integra" value="{{ $secretario->comisiones_que_integra or ''}}">
  </div>
  
  <div class="form-group col-sm-6">
    <label>Con o Sin Poder</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Con o sin poder" name="con_o_sin_poder" value="{{ $secretario->con_o_sin_poder or ''}}">
    <br>
    <label>Participación Grupo Externo</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Participación grupo externo" name="participacion_grupo_externo" value="{{ $secretario->participacion_grupo_externo or ''}}">
  </div>
   <div class="form-group col-sm-6">
    <label>Es Gerente General o Representante:</label>
    {{ Form::select('es_gerente_general_o_representante', ['' => '-None-', 'Si' => 'Si', 'No' => 'No'],'Si', array('class' => 'form-control')) }}
  </div>