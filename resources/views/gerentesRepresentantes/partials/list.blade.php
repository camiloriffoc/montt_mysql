<div>
  <table class="table table-striped">
    <thead>
      <tr >
        <th >Nombre</th>
        <th >RUT</th>
        <th >Es Gerente General o Representante</th>
        <th >Fecha de Vencimiento</th>
        <th >Editar / Eliminar</th>

      </tr>
    </thead>
    <tbody>
      @foreach($gerente as $gerent)
      <tr>
        <td>{{$gerent->nombre}}</td>
        <td>{{$gerent->rut}}</td>
        @if($gerent->gerente_actual=='Si')
        <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
        @else
        <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
        @endif
        <td>{{$gerent->fecha_vencimiento}}</td> 
        <td><a href="/gerente_representante/edit/{{$gerent->id}}" class="menu-cuentas" style="margin-left: 5px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> - <a href="/gerente_representante/delete/{{$gerent->id}}" class="delete-gerente"><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
