

<h2>Datos Generales del Directorio</h2>

  <div class="form-group col-sm-6">
    <label>Cantidad Directores Titulares:</label>
    <input type="text" class="form-control" id=""  placeholder="Cantidad Directores Titulares" name="cantidad_directores_titulares" value="{{ $directorio->cantidad_directores_titulares or ''}}">
  </div>

  <div class="form-group col-sm-6">
     <label>Con o son suplentes</label>
    {{ Form::select('con_o_sin_suplentes', ['Con Suplentes' => 'Con Suplentes', 'Sin Suplentes' => 'Sin Suplentes'],isset($directorio->con_o_sin_suplentes) ? $directorio->con_o_sin_suplentes : '', array('class' => 'form-control')) }}
    
  </div>

  <div class="form-group col-sm-6">
    <label>Vigencia Estatutaria en el Cargo</label>
    <input type="text" class="form-control" id=""  placeholder="Vigencia Estatutaria en el Cargo" name="vigencia_estatutaria_en_el_cargo" value="{{ $directorio->vigencia_estatutaria_en_el_cargo or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Cifra Repartidora de Eleccion</label>
    <input type="text" class="form-control" id=""  placeholder="CIFRA REPARTIDORA DE ELECCIÓN" name="cifra_repartidora_de_eleccion" value="{{ $directorio->cifra_repartidora_de_eleccion or ''}}">
    <small id="emailHelp" class="form-text text-muted">TOTAL ACCIONES DEREHO A VOTO DIVIDIDO POR EL NUMERO
    DE DIRECTORES TITULARES A ESCOGER MÁS UNA UNIDAD, Y AL CUOCIENTE SE LE AGREGA UNA UNIDAD.</small>
  </div>

  <h2>DIRECTORIO ACTUAL:</h2>
  <div class="form-group col-sm-6">
    <label>Fecha nombramiento</label>
    <input type="date" class="form-control" id="" placeholder="Fecha nombramiento" name="fecha_nombramiento" value="{{ $directorio->fecha_nombramiento or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Renovaciones Totales o Parcial</label>
    <input type="text" class="form-control" id="" placeholder="Renovaciones Totales o Parcial" name="renovaciones_totales_o_parcial" value="{{ $directorio->renovaciones_totales_o_parcial or ''}}" >
  </div>
  <div class="form-group col-sm-6">
    <label>Época de Renovación</label>
    <input type="date" class="form-control" id="" placeholder="Época de Renovación" name="epoca_de_renovación" value="{{ $directorio->epoca_de_renovación or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Vigencia comprendida en cada período</label>
    <input type="text" class="form-control" id="" placeholder="Vigencia comprendida en cada período" name="vigencia_comprendida_en_cada_periodo" disabled="true" value="{{ $directorio->vigencia_comprendida_en_cada_periodo or ''}}">
  </div>

  <h2>Remuneraciones Directorio</h2>
  <div class="form-group col-sm-6">
    <label>Remunerados</label>
    <input type="text" class="form-control" name="remunerados" placeholder="Remunerados" value="{{ $directorio->remunerados or ''}}" >
    <br>
    <label>Dietas</label>
    <input type="text" class="form-control" name="dietas" placeholder="Dietas" value="{{ $directorio->dietas or ''}}">
    <br>
    <label>Participaciones</label>
    <input type="text" class="form-control" name="participaciones" placeholder="Participaciones" value="{{ $directorio->participaciones or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Gastos de representación</label>
    <input type="text" class="form-control" name="gastos_de_representacion" placeholder="Gastos de representación" value="{{ $directorio->gastos_de_representacion or ''}}">
    <br>
    <label>Otros Beneficios</label>
    <input type="text" class="form-control" name="otros_beneficios" placeholder="Otros beneficios" value="{{ $directorio->otros_beneficios or ''}}">
    <br>
    <label>Otros Encargos</label>
    <input type="text" class="form-control" name="otros_encargos" placeholder="Otros encargos" value="{{ $directorio->otros_encargos or ''}}">
  </div>

  <h2>Sesiones Ordinarias</h2>
  <div class="form-group col-sm-6">
    <label>Fijadas o No</label>
    <input type="text" class="form-control" name="fijadas_o_no" placeholder="Fijadas o no" value="{{ $directorio->fijadas_o_no or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Periódica o Fecha Fija</label>
    <input type="text" class="form-control" name="periodica_o_fecha_fija" placeholder="Periódica o fecha fija" value="{{ $directorio->periodica_o_fecha_fija or ''}}" >
  </div>

  <h2>Sesiones Extraordinarias</h2>
  <div class="form-group col-sm-6">
    <label>Convocatoria</label>
    <input type="text" class="form-control" name="convocatoria" placeholder="Convocatoria" value="{{ $directorio->convocatoria or ''}}" >
  </div>
  <div class="form-group col-sm-6">
    <label>Citacion</label>
    <input type="text" class="form-control" name="citacion" placeholder="Citacion" value="{{ $directorio->citacion or ''}}" >
  </div>

  <div class="form-group col-sm-6">
    <label>Comunicación</label>
    <input type="text" class="form-control" name="comunicacion" placeholder="Comunicación" value="{{ $directorio->comunicacion or ''}}">
  </div>

  <div class="col-sm-12">
    <h2>Instalación de la sala y adopción de acuerdos</h2>
  </div>

  <div class="form-group col-sm-6">
    <label>Quórums Instalar Sala</label>
    <input type="text" class="form-control" id="" name="quorums_instalar_sala" placeholder="Quórums instalar sala" value="{{ $directorio->quorums_instalar_sala or ''}}">
    <br>
    <label>Mayoría Para Adoptar Acuerdo</label>
    <input type="text" class="form-control" id="" name="mayoria_para_adoptar_acuerdo" placeholder="Mayoría para adoptar acuerdo" value="{{ $directorio->mayoria_para_adoptar_acuerdo or ''}}">
  </div>
  <div class="form-group col-sm-6">
    <label>Quórum y Mayorías Especiales</label>
    <input type="text" class="form-control" id="" name="quorum_y_mayorías_especiales" placeholder="Quórum y mayorías especiales" value="{{ $directorio->quorum_y_mayorías_especiales or ''}}">
    <br>
    <label>Voto Dirimente y Forma Dirimir</label>
    <input type="text" class="form-control" id="" name="voto_dirimente_y_forma_dirimir" value="{{ $directorio->voto_dirimente_y_forma_dirimir or ''}}">
  </div>

  <div class="form-group col-sm-6">
    <label>Actas de directorio:</label>
    <input type="file" class="form-control" id="" accept='application/pdf' name="actas_de_directorio" value="{{ $directorio->actas_de_directorio or ''}}">
  </div>
  <div class="form-group col-sm-6">
    @if(isset($directorio->actas_de_directorio))
    <br>
    <p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/directorios/'.$directorio->actas_de_directorio) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
    @else
    <br>
    <p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
    @endif
  </div>

