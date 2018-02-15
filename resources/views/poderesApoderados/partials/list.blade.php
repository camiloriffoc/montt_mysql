
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
          <th>Fecha Otorgamiento</th>
          <th>Fecha revocación</th>
          <th>Inscripción de otorgamiento en el Registro de Comercio</th>
          <th>Informado a Bancos</th>
          <th>inscripción de Revocación en el Registro de Comercio</th>
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
            
            @if($poder->fecha_nombramiento_file)
            <td><a target="_blank" href="{{asset('uploads/poderes/'.$poder->fecha_nombramiento_file)}}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></td>
            @else
            <td></td>
            @endif
            
            <td>{{$poder->fecha_revocacion_de_poder}}</td>
            
            @if($poder->poder_inscrito_cbr_file)
            <td><a target="_blank" href="{{asset('uploads/poderes/'.$poder->poder_inscrito_cbr_file)}}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></td>
            @else
            <td> </td>
            @endif
            
            <td>{{ $poder->informado_bancos or '' }}</td>
            
            @if($poder->inscripcion_renovacion_cbr_file)
            <td><a target="_blank" href="{{asset('uploads/poderes/'.$poder->inscripcion_renovacion_cbr_file)}}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></td>
            @else
            <td> </td>
            @endif
            00
            <td>{{ $poder->revocacion_informada_bancos}}</td>
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