<h1 class="text-primary">Administración de Acciones: {{ $sociedad->razon_social }}</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Serie</th>
        <th class="text-center">Cantidad</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($acciones as $accion)
        <tr data-id='{{ $accion->id }}'>
            <td class="text-center">{{ $accion->id }}</td>
            <td class="text-center">{{ $accion->serie}}</td>
            <td class="text-center">{{ $accion->cantidad }}</td>
        	<td class="text-center">{{ $accion->created_at }}</td>

        {!! Form::open(['route' => ['acciones.destroy', ':ACCION_ID'], 'method' => 'DELETE', 'id' => 'form-delete-accion']) !!}

            <td class="text-center">
                <a type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove delete-accion" aria-hidden="true"></span>
                </a>
                <a href="{{ url('/acciones/'.$accion->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
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
        <th class="text-center">Razón Social</th>
        <th class="text-center">Rut</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>
<script src="{{ asset('js/acciones.js') }}"></script>