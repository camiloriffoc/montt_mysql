<h1 class="text-primary">Administración de Listado de Accionista capital: {{ $sociedad->razon_social }}</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Nombre o Razón Social</th>
        <th class="text-center">Número de acciones</th>
        <th class="text-center">Serie de acciones</th>
        <th class="text-center">Porcentaje de capital pagado</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listado_capital as $listado)
        <tr data-id='{{ $listado->id }}'>
            <td class="text-center">{{ $listado->nombre_razon_social }}</td>
            <td class="text-center">{{ $listado->numero_acciones}}</td>
            <td class="text-center">{{ $listado->serie_acciones }}</td>
        	<td class="text-center">{{ $listado->porcentaje_capital_pagado }}</td>
        {!! Form::open(['route' => ['listado_capital.destroy', ':LISTADOCAPITAL_ID'], 'method' => 'DELETE', 'id' => 'form-delete-accion']) !!}

            <td class="text-center">
                <a type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove delete-accion" aria-hidden="true"></span>
                </a>
                <a href="{{ url('/listado_capital/'.$listado->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
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
        <th class="text-center">Porcentaje de capital pagado</th>
    </tr>
  </tfoot>
</table>
