<h1 class="text-primary">Administración de Sucursales de: {{ $sociedad->razon_social or '' }}</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Calle / Avenida</th>
        <th class="text-center">Número</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sucursales as $sucursal)
        <tr data-id='{{ $sucursal->id }}'>
            <td class="text-center">{{ $sucursal->id }}</td>
            <td class="text-center">{{ $sucursal->sucursal_calle }}</td>
            <td class="text-center">{{ $sucursal->sucursal_numero }}</td>
        <td class="text-center">{{ $sucursal->created_at }}</td>

        {!! Form::open(['route' => ['sucursales.destroy', ':SUCURSAL_ID'], 'method' => 'DELETE', 'id'=>'form-delete-sucursal']) !!}

            <td class="text-center">
                <a type="submit" class="btn btn-danger btn-xs delete-sucursal" data-confirm="Are you sure?">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
                <a href="{{ url('/sucursales/'.$sucursal->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
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
        <th class="text-center">Calle / Avenida</th>
        <th class="text-center">Número</th>
        <th class="text-center">Ciudad</th>
        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>