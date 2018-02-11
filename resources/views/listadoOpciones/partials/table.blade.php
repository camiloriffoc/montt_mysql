<h1 class="text-primary">Administración de Listado de Opciones: {{ $sociedad->razon_social }}</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Número de Opción</th>
        <th class="text-center">Titular de la Opción</th>
        <th class="text-center">Acciones subyacentes que comprende</th>
        <th class="text-center">Vencimiento de la Opción</th>
        <th class="text-center">Cesionario de la Opción</th>
        <th class="text-center">Ejecutada</th>
        <th class="text-center">Cancelación de la Opción</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listado_opciones as $listado)
        <tr data-id='{{ $listado->id }}'>
            <td class="text-center">{{ $listado->numero_de_opcion }}</td>
            <td class="text-center">{{ $listado->titular_opcion}}</td>
            <td class="text-center">{{ $listado->acciones_subyacentes }}</td>
        	<td class="text-center">{{ $listado->vencimiento_opcion }}</td>
            <td class="text-center">{{ $listado->cesionario_opcion }}</td>
            <td class="text-center">{{ $listado->ejecutada }}</td>
            <td class="text-center">{{ $listado->cancelacion_opcion }}</td>
        {!! Form::open(['route' => ['listado_opciones.destroy', ':LISTADOOPCIONES_ID'], 'method' => 'DELETE', 'id' => 'form-delete-accion']) !!}

            <td class="text-center">
                <a type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove delete-accion" aria-hidden="true"></span>
                </a>
                <a href="{{ url('/listado_opciones/'.$listado->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}

        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">Número de Opción</th>
        <th class="text-center">Titular de la Opción</th>
        <th class="text-center">Acciones subyacentes que comprende</th>
        <th class="text-center">Vencimiento de la Opción</th>
        <th class="text-center">Cesionario de la Opción</th>
        <th class="text-center">Ejecutada</th>
        <th class="text-center">Cancelación de la Opción</th>
    </tr>
  </tfoot>
</table>