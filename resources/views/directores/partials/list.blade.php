
<div>
  <h4>Directorio (Accionistas)</h4>
  <table class="table table-striped">
    <thead>
      <tr style=" text-align: center;">
        <th style=" text-align: center;">Nombre o Razón Social </th>
        <th style=" text-align: center;">RUT</th>
        <th style=" text-align: center;">Es Director titular</th>
        <th style=" text-align: center;">Es Director Suplente</th>
        <th style=" text-align: center;">Es Presidente del Directorio</th>
        <th style=" text-align: center;">Editar / Eliminar</th>

      </tr>
    </thead>
    <tbody>
      @foreach($directores as $director)
        @if($director->accionista=='Si')
          <tr style="text-align: center;">
            <td>{{$director->nombres}}</td>
            <td>{{$director->rut}}</td>
            @if($director->tipo_de_director=='Director Titular')
            <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
            @else
             <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
             <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            @endif
             @if($director->presidente_del_directorio=='Si')
            <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            @else
             <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
            @endif
            <td><a href="/director/edit/{{$director->directorio_id}}/{{$director->id}}" class="menu-cuentas" style="margin-left: 5px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> - <a href="/director/delete/{{$director->directorio_id}}/{{$director->id}}" class="delete-director"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
          </tr>
        @endif  
      @endforeach
    </tbody>
  </table>
</div>

<hr> 

<div>
  <h4>Directorio (No Accionistas)</h4>
  <table class="table table-striped">
    <thead>
      <tr style=" text-align: center;">
        <th style=" text-align: center;">Nombre o Razón Social </th>
        <th style=" text-align: center;">RUT</th>
        <th style=" text-align: center;">Es Director titular</th>
        <th style=" text-align: center;">Es Director Suplente</th>
        <th style=" text-align: center;">Es Presidente del Directorio</th>
        <th style=" text-align: center;">Acciones</th>

      </tr>
    </thead>
    <tbody>
       @foreach($directores as $director)
        @if($director->accionista=='No')
          <tr style="text-align: center;">
            <td >{{$director->nombres}}</td>
            <td>{{$director->rut}}</td>
            @if($director->tipo_de_director=='Director Titular')
            <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
            @else
             <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
             <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            @endif
             @if($director->presidente_del_directorio=='Si')
            <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
            @else
             <td><span class="glyphicon glyphicon-remove" aria-hidden="true"></span></td>
            @endif
            <td><a href="/director/edit/{{$director->directorio_id}}/{{$director->id}}" class="menu-cuentas" style="margin-left: 5px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> - <a href="/director/delete/{{$director->directorio_id}}/{{$director->id}}" class="delete-director"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
          </tr>
        @endif  
      @endforeach
    </tbody>
  </table>
</div>

<hr>   

<div>
  <h4>Secretario </h4>

  <table class="table table-striped">
    <thead>
      <tr style=" text-align: center;">
        <th style=" text-align: center;">Nombre o Razón Social </th>
        <th style=" text-align: center;">RUT</th>
        <th style=" text-align: center;">Es Secretario</th>
        <th style=" text-align: center;">Acciones</th>
      </tr>
    </thead>
    <tbody>
      @if($secretario)
        <tr style=" text-align: center;">
          <td>{{$secretario->nombres}}</td>
          <td>{{$secretario->rut}}</td>
          <td><span class="glyphicon glyphicon-ok" aria-hidden="true"></span></td>
          <td><a href="/secretario/{{$secretario->directorio_id}}" class="menu-cuentas" style="margin-left: 5px;"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span></a> - <a href="/secretario/delete/{{$secretario->directorio_id}}" class="delete-secretario"><span class="glyphicon glyphicon-trash" aria-hidden="true"></span></a></td>
        </tr>
      @endif
    </tbody>
  </table>
  

</div>

  