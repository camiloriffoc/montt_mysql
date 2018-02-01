<br><br>
<div class="form-group col-sm-6">
    <label>Nombres:</label>
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Nombre" name="nombre_remplazante" value="{{$gerente->nombre_remplazante or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>RUT</label>
    <input type="text" class="form-control" id="" name="rut_remplazante" aria-describedby="emailHelp" placeholder="RUT" value="{{$gerente->rut_remplazante or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Domicilio</label>
    <input type="text" class="form-control" id="" name="domicilio_remplazante" aria-describedby="emailHelp" placeholder="Domicilio" value="{{$gerente->domicilio_remplazante or ''}}">
    <br>
    <label>Numero</label>
    <input type="text" class="form-control" id="" name="numero_remplazante" aria-describedby="emailHelp" placeholder="NRO" onKeyPress="return soloNumeros(event)" value="{{$gerente->numero_remplazante or ''}}">
    <br>
    <label>Piso</label>
    <input type="text" class="form-control" id="" name="piso_remplazante" aria-describedby="emailHelp" placeholder="Piso" value="{{$gerente->piso_remplazante or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Comuna</label>
    <input type="text" class="form-control" id="" name="comuna_remplazante" aria-describedby="emailHelp" placeholder="Comuna/Distrito" value="{{$gerente->comuna_remplazante or ''}}">
    <br>
    <label>Cuidad</label>
    <input type="text" class="form-control" id="" name="ciudad_remplazante" aria-describedby="emailHelp" placeholder="Cuidad" value="{{$gerente->ciudad_remplazante or ''}}"> 
    <br>
    <label>Región</label>
    <input type="text" class="form-control" id="" name="region_remplazante" aria-describedby="emailHelp" placeholder="Región" value="{{$gerente->region_remplazante or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Estado</label>
    <input type="text" class="form-control" id="" name="estado_remplazante" aria-describedby="emailHelp" placeholder="Estado" value="{{$gerente->estado_remplazante or ''}}"> 
    <br>
    <label>País</label>
    <input type="text" class="form-control" id="" name="pais_remplazante" aria-describedby="emailHelp" placeholder="País" value="{{$gerente->pais_remplazante or ''}}"> 
    <br>
    <label>Codigo Postal</label>
    <input type="text" class="form-control" id="" name="codigo_postal_remplazante" aria-describedby="emailHelp" placeholder="Codigo Postal" value="{{$gerente->codigo_postal_remplazante or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Profesion</label>
    <input type="text" class="form-control" id="" name="profesion_remplazante" aria-describedby="emailHelp" placeholder="Profesion" value="{{$gerente->profesion_remplazante or ''}}"> 
    <br>
    <label>Nacionalidad</label>
    <input type="text" class="form-control" id="" name="nacionalidad_remplazante" aria-describedby="emailHelp" placeholder="Nacionalidad" value="{{$gerente->nacionalidad_remplazante or ''}}"> 
    <br>
    <label>Estado Civil</label>
    <input type="text" class="form-control" id="" name="estado_civil_remplazante" aria-describedby="emailHelp" placeholder="Estado Civil" value="{{$gerente->estado_civil_remplazante or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Correo Electronico</label>
    <input type="text" class="form-control" id="" name="correo_electronico_remplazante" aria-describedby="emailHelp" placeholder="Correo Electrónico" value="{{$gerente->correo_electronico_remplazante or ''}}"> 
    <br>
    <label>Skype</label>
    <input type="text" class="form-control" id="" name="skype_remplazante" aria-describedby="emailHelp" placeholder="Skype" value="{{$gerente->skype_remplazante or ''}}"> 
  </div>

  <div class="form-group col-sm-6">
    <label>Telefono</label>
    <input type="text" class="form-control" id="" name="telefono_remplazante" aria-describedby="emailHelp" placeholder="Teléfono" onKeyPress="return soloNumeros(event)" value="{{$gerente->telefono_remplazante or ''}}"> 
    <br>
    <label>Celular</label>
    <input type="text" class="form-control" id="" name="celular_remplazante" aria-describedby="emailHelp" placeholder="Celular" onKeyPress="return soloNumeros(event)" value="{{$gerente->celular_remplazante or ''}}"> 
  </div>
  <div class="form-group col-sm-6">
    <label>Fecha de Designación</label>
    <input type="date" class="form-control" id=""  aria-describedby="emailHelp" placeholder="Fecha vencimiento en el cargo" name="fecha_designacion" value="{{$gerente->fecha_designacion or ''}}">
  </div>