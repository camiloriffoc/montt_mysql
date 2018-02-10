<center><h2>Capital Social</h2></center>

<div class="form-group col-sm-6">
    <label>CAPITAL FIJO O VARIABLE:</label>
    {{ Form::select('capital_fijo_o_variable',['Capital Fijo' => 'Capital Fijo', 'Capital Variable' => 'Capital Variable'],isset($capital->capital_fijo_o_variable) ? $capital->capital_fijo_o_variable : '', array('class' => 'form-control')) }}
</div>

<div class="form-group col-sm-6">
    <label for="sel1">DENOMINACION MONEDA CAPITAL SOCIAL:</label>
    {{ Form::select('denominaicon_moneda_capital',['Peso Chileno' => 'Peso Chileno', 'Peso Colombiano' => 'Peso Colombiano', 'Nuevos Soles' => 'Nuevos Soles', 'Peso Argentino' => 'Peso Argentino', 'Reales' => 'Reales', 'Guaranies' => 'Guaranies', 'Dolares' => 'Dolares'],isset($capital->denominaicon_moneda_capital) ? $capital->denominaicon_moneda_capital : '', array('class' => 'form-control')) }}
</div>

<div class="form-group col-sm-6">
    <label for="">CAPITAL SOCIAL TOTAL AUTORIZADO</label>
    <input type="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="$10000" name="capital_autorizado" value="{{$capital->capital_autorizado or ''}}">
    <input type="text" class="form-control" id="" aria-describedby="emailHelp" placeholder="Monto Escrito" name="capital_autorizado_escrito" value="{{$capital->capital_autorizado_escrito or ''}}">
</div>

<div class="form-group col-sm-6">
    <label>CAPITAL REVALORIZADO AL 31 DE DICIEMBRE DEL AÑO ANTERIOR:</label>
    {{ Form::select('capital_revalorizado',['Si' => 'Si', 'No' => 'No'],isset($capital->capital_revalorizado) ? $capital->capital_revalorizado : '', array('class' => 'form-control')) }}
    <input type="text" class="form-control" placeholder="Monto Escrito" name="capital_revalorizado_escrito" value="{{ $capital->capital_revalorizado_escrito or '' }}">
</div>

<div class="form-group col-sm-6">
    <label for="">CAPITAL SOCIAL TOTAL SUSCRITO:</label>
    <input type="number" class="form-control" id="" aria-describedby="emailHelp" placeholder="Ej. $90" name="capital_suscrito" value="{{ $capital->capital_suscrito or '' }}">
    {{ Form::select('capital_suscrito_divisa',['Peso Chileno' => 'Peso Chileno', 'Peso Colombiano' => 'Peso Colombiano', 'Nuevos Soles' => 'Nuevos Soles', 'Peso Argentino' => 'Peso Argentino', 'Reales' => 'Reales', 'Guaranies' => 'Guaranies', 'Dolares' => 'Dolares'], isset($capital->capital_suscrito) ? $capital->capital_suscrito : '', array('class' => 'form-control')) }}
  </div>

 <div class="form-group col-sm-6">
    <label for="">CAPITAL SOCIAL TOTAL PENDIENTE DE SUSCRIPCION:</label>
    <input type="number" class="form-control" placeholder="Ej. $90" name="capital_por_suscribir" value="{{$capital->capital_por_suscribir or ' ' }}">
    {{ Form::select('capital_pendiente_por_suscribir_divisa',['Peso Chileno' => 'Peso Chileno', 'Peso Colombiano' => 'Peso Colombiano', 'Nuevos Soles' => 'Nuevos Soles', 'Peso Argentino' => 'Peso Argentino', 'Reales' => 'Reales', 'Guaranies' => 'Guaranies', 'Dolares' => 'Dolares'],isset($capital->capital_pendiente_por_suscribir_divisa) ? $capital->capital_pendiente_por_suscribir_divisa : '', array('class' => 'form-control')) }}
</div>

<div class="form-group col-sm-6">
    <label for="">CAPITAL SOCIAL TOTAL PAGADO:</label>
    <input type="number" class="form-control"  placeholder="Ej. $90" name="capital_pagado" value="{{ $capital->capital_pagado or '' }}">
    {{ Form::select('capital_pagado_divisa',['Peso Chileno' => 'Peso Chileno', 'Peso Colombiano' => 'Peso Colombiano', 'Nuevos Soles' => 'Nuevos Soles', 'Peso Argentino' => 'Peso Argentino', 'Reales' => 'Reales', 'Guaranies' => 'Guaranies', 'Dolares' => 'Dolares'],isset($capital->capital_pagado_divisa) ? $capital->capital_pagado_divisa : '', array('class' => 'form-control')) }}
  </div>
  
  <div class="form-group col-sm-6">
    <label for="">CAPITAL SOCIAL TOTAL PENDIENTE DE PAGO:</label>
    <input type="number" class="form-control" id="" aria-describedby="emailHelp"  placeholder="Ej. $90" name="capital_pendiente_pago" value="{{$capital->capital_pendiente_pago or '' }}">
    {{ Form::select('capital_pendiente_pago_divisa',['Peso Chileno' => 'Peso Chileno', 'Peso Colombiano' => 'Peso Colombiano', 'Nuevos Soles' => 'Nuevos Soles', 'Peso Argentino' => 'Peso Argentino', 'Reales' => 'Reales', 'Guaranies' => 'Guaranies', 'Dolares' => 'Dolares'], isset($capital->capital_pendiente_pago_divisa) ? $capital->capital_pendiente_pago_divisa : '', array('class' => 'form-control')) }}
  </div>