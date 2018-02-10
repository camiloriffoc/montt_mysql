<h1 class="text-primary">Administración de Listado de Accionista derecho a Dividendos: {{ $sociedad->razon_social }}</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Nombre o Razón Social</th>
        <th class="text-center">Número de acciones</th>
        <th class="text-center">Serie de acciones</th>
        <th class="text-center">Porcentaje total de acciones emitidas con derecho a dividendo</th>
        <th class="text-center">Residente en Chile</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listado_dividendo as $listado)
        <tr data-id='{{ $listado->id }}'>
            <td class="text-center">{{ $listado->nombre_razon_social }}</td>
            <td class="text-center">{{ $listado->numero_acciones}}</td>
            <td class="text-center">{{ $listado->serie_acciones }}</td>
        	<td class="text-center">{{ $listado->porcentaje_capital_derecho_dividendo }}</td>
            <td class="text-center">{{ $listado->residente_chile }}</td>
        {!! Form::open(['route' => ['listado_dividendo.destroy', ':LISTADODIVIDENDO_ID'], 'method' => 'DELETE', 'id' => 'form-delete-accion']) !!}

            <td class="text-center">
                <a type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove delete-accion" aria-hidden="true"></span>
                </a>
                <a href="{{ url('/listado_dividendo/'.$listado->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}

        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">Nombre o Razón Social</th>
        <th class="text-center">Número de acciones</th>
        <th class="text-center">Serie de acciones</th>
        <th class="text-center">Porcentaje total de acciones emitidas con derecho a dividendo</th>
        <th class="text-center">Residente en Chile</th>
    </tr>
  </tfoot>
</table>