<br><br>
  <div class="form-group col-sm-6">
    <label>Nombres:</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nombre" name="nombre" value="{{$gerente->nombre or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Apellidos:</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Apellido" name="apellido" value="{{$gerente->apellido or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Cargo</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Cargo" name="cargo" value="{{$gerente->cargo or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Es Gerente General o Represenrante:</label>
    {{ Form::select('gerente_actual', ['Si' => 'Si', 'No' => 'No'],isset($gerente->gerente_actual) ? $gerente->gerente_actual : '', array('class' => 'form-control')) }}
  </div>

  @if(isset($gerente->fecha_nombramiento_file) || isset($gerente->rut_file))
      
      <div class="form-group col-sm-4">
        <label>Fecha nombramiento</label>
        <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha nombramiento" name="fecha_nombramiento" value="{{$gerente->fecha_nombramiento or ''}}">
        <input type="file" class="form-control" name="fecha_nombramiento_file" accept="application/pdf">
    </div>
    <div class="form-group col-sm-2">
        <br><br><br>
        <p><a target="_blank" href="{{asset('uploads/gerentes/'.$gerente->fecha_nombramiento_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
    </div>
    <div class="form-group col-sm-4">
        <label>RUT</label>
        <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="RUT" name="rut" value="{{$gerente->rut or ''}}">
        <input type="file" class="form-control" name="rut_file" accept="application/pdf">
    </div>
    <div class="form-group col-sm-2">
      <br><br><br>
      <p><a target="_blank" href="{{asset('uploads/gerentes/'.$gerente->rut_file)}}"><span style="font-size: 22px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
    </div>

  @else
   <div class="form-group col-sm-6">
        <label>Fecha nombramiento</label>
        <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha nombramiento" name="fecha_nombramiento" value="{{$gerente->fecha_nombramiento or ''}}">
        <input type="file" class="form-control" name="fecha_nombramiento_file" accept="application/pdf">
    </div>
    <div class="form-group col-sm-6">
        <label>RUT</label>
        <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="RUT" name="rut" value="{{$gerente->rut or ''}}">
        <input type="file" class="form-control" name="rut_file" accept="application/pdf">
    </div>
  @endif  

  <div class="form-group col-sm-6">
    <label>Fecha vencimiento en el cargo</label>
    <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha vencimiento en el cargo" name="fecha_vencimiento" value="{{$gerente->fecha_vencimiento or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Domicilio</label>
    <input type="text" class="form-control" id="" name="domicilio_calle" aria-describedby="emailHelp" placeholder="Domicilio" value="{{$gerente->domicilio_calle or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Numero</label>
    <input type="text" class="form-control" id="" name="domicilio_numero" aria-describedby="emailHelp" placeholder="NRO" onKeyPress="return soloNumeros(event)" value="{{$gerente->domicilio_numero or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Piso</label>
    <input type="text" class="form-control" id="" name="domicilio_piso" aria-describedby="emailHelp" placeholder="Piso" value="{{$gerente->domicilio_piso or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Comuna</label>
    <input type="text" class="form-control" id="" name="domicilio_comuna" aria-describedby="emailHelp" placeholder="Comuna/Distrito" value="{{$gerente->domicilio_comuna or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Cuidad</label>
    <input type="text" class="form-control" id="" name="domicilio_ciudad" aria-describedby="emailHelp" placeholder="Cuidad" value="{{$gerente->domicilio_ciudad or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Región</label>
    <input type="text" class="form-control" id="" name="domicilio_region_provincia_barra" aria-describedby="emailHelp" placeholder="Región" value="{{$gerente->domicilio_region_provincia_barra or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Estado</label>
    <input type="text" class="form-control" id="" name="domicilio_estado" aria-describedby="emailHelp" placeholder="Estado" value="{{$gerente->domicilio_estado or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>País</label>
    <input type="text" class="form-control" id="" name="domicilio_pais" aria-describedby="emailHelp" placeholder="País" value="{{$gerente->domicilio_pais or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Nacionalidad</label>
    <input type="text" class="form-control" id="" name="nacionalidad" aria-describedby="emailHelp" placeholder="Nacionalidad" value="{{$gerente->nacionalidad or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Codigo Postal</label>
    <input type="text" class="form-control" id="" name="domicilio_codigo_postal" aria-describedby="emailHelp" placeholder="Codigo Postal" value="{{$gerente->domicilio_codigo_postal or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Profesion</label>
    <input type="text" class="form-control" id="" name="profesion" aria-describedby="emailHelp" placeholder="Profesion" value="{{$gerente->profesion or ''}}"> 
  </div>
  
  <div class="form-group col-sm-6">
    <label>Estado Civil</label>
    <input type="text" class="form-control" id="" name="estado_civil" aria-describedby="emailHelp" placeholder="Estado Civil" value="{{$gerente->estado_civil or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Correo Electronico</label>
    <input type="text" class="form-control" id="" name="correo_electronico" aria-describedby="emailHelp" placeholder="Correo Electrónico" value="{{$gerente->correo_electronico or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Skype</label>
    <input type="text" class="form-control" id="" name="skype" aria-describedby="emailHelp" placeholder="Skype" value="{{$gerente->skype or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Telefono</label>
    <input type="text" class="form-control" id="" name="telefono" aria-describedby="emailHelp" placeholder="Teléfono" onKeyPress="return soloNumeros(event)" value="{{$gerente->telefono or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Celular</label>
    <input type="text" class="form-control" id="" name="celular" aria-describedby="emailHelp" placeholder="Celular" onKeyPress="return soloNumeros(event)" value="{{$gerente->celular or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Accionistas que lo nombro:</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Accionistas que lo nombro" name="accionistas_que_lo_nombro" value="{{$gerente->accionistas_que_lo_nombro or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Renovaciones</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Renovaciones en el cargo" name="renovaciones" value="{{$gerente->renovaciones or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Vigencia</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Vigencia en el cargo" name="vigencia" value="{{$gerente->vigencia or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Asistencia</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Asistencia" name="asistencia" value="{{$gerente->asistencia or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Expertise</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Expertise" name="expertise" value="{{$gerente->expertise or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Repetición de Filiales</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Se repite en filiales" name="repeticion_de_filiales" value="{{$gerente->repeticion_de_filiales or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Actividad que Desempeña</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Actividad que desempeña" name="actividad_que_desempeña" value="{{$gerente->actividad_que_desempeña or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Idiomas</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Idiomas" name="idiomas" value="{{$gerente->idiomas or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Comisiones que Integra</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Comisiones que integra" name="comisiones_que_integra" value="{{$gerente->comisiones_que_integra or ''}}">
  </div>
  
  <div class="form-group col-sm-6">
    <label>Con o Sin Poder</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Con o sin poder" name="con_o_sin_poder" value="{{$gerente->con_o_sin_poder or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Participación Grupo Externo</label>
    <input type="text" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Participación grupo externo" name="participacion_grupo_externo" value="{{$gerente->participacion_grupo_externo or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Presidente del Directorio</label>
    {{ Form::select('presidente_del_directorio', ['No' => 'No', 'Si' => 'Si'],isset($gerente->presidente_del_directorio) ? $gerente->presidente_del_directorio : '', array('class' => 'form-control')) }}
  </div>

  <div class="form-group col-sm-6">
    <label>Es Secretario:</label>
    {{ Form::select('es_secretario', ['Si' => 'Si', 'No' => 'No'],isset($gerente->es_secretario) ? $gerente->es_secretario : '', array('class' => 'form-control')) }}
  </div> 
  
   <div class="form-group col-sm-6">
    <label>Es Gerente General o Representante:</label>
    {{ Form::select('es_gerente_general_o_representante', ['Si' => 'Si', 'No' => 'No'],isset($gerente->es_gerente_general_o_representante) ? $gerente->es_gerente_general_o_representante : '', array('class' => 'form-control')) }}
  </div>
  <div class="form-group col-sm-12">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Agregar/Editar Reemplazante</button>
  </div>
 
  <div id="demo2" class="collapse">
      @include('gerentesRepresentantes.partials.remplazante_fields')
  </div>
  

 


