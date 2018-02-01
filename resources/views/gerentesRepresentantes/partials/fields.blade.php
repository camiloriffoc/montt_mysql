<br><br>
<div class="form-group col-sm-6">
    <label>Nombres:</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nombre" name="nombre" value="{{$gerente->nombre or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Cargo</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Cargo" name="cargo" value="{{$gerente->cargo or ''}}">
  </div>

   <div class="form-group col-sm-6">
    <label>Fecha nombramiento</label>
    <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha nombramiento" name="fecha_nombramiento" value="{{$gerente->fecha_nombramiento or ''}}">
  <!--   {{ Form::file('adjunto_fecha_nombramiento',['accept'=>'application/pdf','class'=>'form-control']) }} -->
  </div>

  <div class="form-group col-sm-6">
    <label>Gerente General o Representante</label>
    {{ Form::select('gerente_o_representante', ['Gerente General' => 'Gerente General', 'Representante' => 'Representante'],isset($gerente->gerente_o_representante) ? $gerente->gerente_o_representante : '', array('class' => 'form-control')) }}
  </div>
  
  <div class="form-group col-sm-6">
    <label>Fecha vencimiento en el cargo</label>
    <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha vencimiento en el cargo" name="fecha_vencimiento" value="{{$gerente->fecha_vencimiento or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>RUT</label>
    <input type="text" class="form-control" id="" name="rut" aria-describedby="emailHelp" placeholder="RUT" value="{{$gerente->rut or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Domicilio</label>
    <input type="text" class="form-control" id="" name="domicilio" aria-describedby="emailHelp" placeholder="Domicilio" value="{{$gerente->domicilio or ''}}">
    <br>
    <label>Numero</label>
    <input type="text" class="form-control" id="" name="numero" aria-describedby="emailHelp" placeholder="NRO" onKeyPress="return soloNumeros(event)" value="{{$gerente->numero or ''}}">
    <br>
    <label>Piso</label>
    <input type="text" class="form-control" id="" name="piso" aria-describedby="emailHelp" placeholder="Piso" value="{{$gerente->piso or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Comuna</label>
    <input type="text" class="form-control" id="" name="comuna" aria-describedby="emailHelp" placeholder="Comuna/Distrito" value="{{$gerente->comuna or ''}}">
    <br>
    <label>Cuidad</label>
    <input type="text" class="form-control" id="" name="ciudad" aria-describedby="emailHelp" placeholder="Cuidad" value="{{$gerente->ciudad or ''}}"> 
    <br>
    <label>Región</label>
    <input type="text" class="form-control" id="" name="region" aria-describedby="emailHelp" placeholder="Región" value="{{$gerente->region or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Estado</label>
    <input type="text" class="form-control" id="" name="estado" aria-describedby="emailHelp" placeholder="Estado" value="{{$gerente->estado or ''}}"> 
    <br>
    <label>País</label>
    <input type="text" class="form-control" id="" name="pais" aria-describedby="emailHelp" placeholder="País" value="{{$gerente->pais or ''}}"> 
    <br>
    <label>Codigo Postal</label>
    <input type="text" class="form-control" id="" name="codigo_postal" aria-describedby="emailHelp" placeholder="Codigo Postal" value="{{$gerente->codigo_postal or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Profesion</label>
    <input type="text" class="form-control" id="" name="profesion" aria-describedby="emailHelp" placeholder="Profesion" value="{{$gerente->profesion or ''}}"> 
    <br>
    <label>Nacionalidad</label>
    <input type="text" class="form-control" id="" name="nacionalidad" aria-describedby="emailHelp" placeholder="Nacionalidad" value="{{$gerente->nacionalidad or ''}}"> 
    <br>
    <label>Estado Civil</label>
    <input type="text" class="form-control" id="" name="estado_civil" aria-describedby="emailHelp" placeholder="Estado Civil" value="{{$gerente->estado_civil or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Correo Electronico</label>
    <input type="text" class="form-control" id="" name="correo_electronico" aria-describedby="emailHelp" placeholder="Correo Electrónico" value="{{$gerente->correo_electronico or ''}}"> 
    <br>
    <label>Skype</label>
    <input type="text" class="form-control" id="" name="skype" aria-describedby="emailHelp" placeholder="Skype" value="{{$gerente->skype or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Telefono</label>
    <input type="text" class="form-control" id="" name="telefono" aria-describedby="emailHelp" placeholder="Teléfono" onKeyPress="return soloNumeros(event)" value="{{$gerente->telefono or ''}}"> 
    <br>
    <label>Celular</label>
    <input type="text" class="form-control" id="" name="celular" aria-describedby="emailHelp" placeholder="Celular" onKeyPress="return soloNumeros(event)" value="{{$gerente->celular or ''}}"> 
  </div>
  <div class="form-group col-sm-12">
    <button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Agregar/Editar Reemplazante</button>
  </div>
    
  <div id="demo2" class="collapse">
      @include('gerentesRepresentantes.partials.remplazante_fields')
  </div>
  

 


