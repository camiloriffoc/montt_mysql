<h1 class="text-primary">Administración de Giros de: {{ $sociedad->razon_social or '' }}</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Actividades</th>
        <th class="text-center">Código</th>
        <th class="text-center">Categoría</th>
        <th class="text-center">Afecta IVA</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($giros as $giro)
        <tr data-id='{{ $giro->id }}'>
            <td class="text-center">{{ $giro->id }}</td>
            <td class="text-center">{{ $giro->actividades }}</td>
            <td class="text-center">{{ $giro->codigo }}</td>
        	<td class="text-center">{{ $giro->categoria }}</td>
        	<td class="text-center">{{ $giro->afecta_iva }}</td>

        {!! Form::open(['route' => ['giros.destroy', ':GIRO_ID'], 'method' => 'DELETE', 'id'=>'form-delete-giro']) !!}

            <td class="text-center">
                <a type="submit" class="btn btn-danger btn-xs delete-giro">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
                <a href="{{ url('/giros/'.$giro->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}

        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Actividades</th>
        <th class="text-center">Código</th>
        <th class="text-center">Categoría</th>
        <th class="text-center">Afecta IVA</th>
        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>