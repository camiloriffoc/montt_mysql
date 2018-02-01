
<h2>Lista de Poderes y Apoderados</h2>

@if(isset($poderes))
<div class="table-responsive col-sm-12">   
    <table class="table">
      <thead>
        <tr>
          <th>Nombre</th>
          <th>Vigente o Revocado </th>
          <th>Rut Apoderado</th>
          <th>Forma de actuar</th>
          <th>Fecha Otorgamiento (Archivo adjunto)</th>
          <th>Fecha revocación (Archivo adjunto)</th>
          <th>Tipo de Instrumento</th>
          <th>Inscripción de otorgamiento en el Registro de Comercio Archivo adjunto</th>
          <th>Informado a Bancos</th>
          <th>inscripción de Revocación en el Registro de Comercio Archivo adjunto</th>
          <th>Revocación Informada a Bancos</th>
          <th>Editar</th>
          <th></th>
        </tr>
      </thead>
      <tbody>
        @foreach ($poderes as $poder )
          <tr>
            <td>{{ $poder->nombre or '' }}</td>
            <td>{{ $poder->periodo_vigencia or ''}}</td>
            <td>{{ $poder->rut or ''  }}</td>
            <td>{{ $poder->forma_de_actuar or ''}}</td>
            <td></td>
            <td></td>
            <td>{{ $poder->instrumento_revocacion_de_poder or ''}}</td>
            <td></td>
            <td>{{ $poder->informado_bancos or '' }}</td>
            <td></td>
            <td>{{ $value['Revocación informada a Bancos'] or '' }}</td>
            <td>
              <a href="/poderes_apoderados/edit/{{ $poder->id}}" class="menu-cuentas btn btn-info btn-xs ">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
              </a>
              <a href="/poderes_apoderados/delete/{{$poder->id}}" class="delete-poder btn btn-danger btn-xs">
                <span class="glyphicon glyphicon-remove delete-accion" aria-hidden="true"></span>
              </a>
            </td>
          </tr>
        @endforeach  
      </tbody>
    </table>
</div>
@endif