<h1 class="text-primary">Porcentaje de acciones por accionista de: {{ $accionista->razon_social or $accionista->nombre }}</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Nombre o Razón social</th>
        <th class="text-center">Rut</th>
        <th class="text-center">Total acciones autorizadas</th>
        <th class="text-center">Número de acciones suscritas</th>
        <th class="text-center">Acciones pagadas</th>
        <th class="text-center">Fecha autorización</th>
        <th class="text-center">Fecha máxima de pago</th>
        <th class="text-center">Porcentaje de acciones</th>

    </tr>
  </thead>
  <tbody>
    @foreach($porcentajesAccionesAccionistas as $porcentajeAA)
        <tr data-id='{{ $porcentajeAA->id }}'>
            <td class="text-center">{{ $accionista->razon_social or $accionista->nombre }}</td>
            <td class="text-center">{{ $accionista->rut }}</td>
            <td class="text-center">{{ $porcentajeAA->total_acciones_autorizadas }}</td>
            <td class="text-center">{{ $porcentajeAA->numero_acciones_suscritas }}</td>
            <td class="text-center">{{ $porcentajeAA->acciones_pagadas }}</td>
            <td class="text-center">{{ $porcentajeAA->fecha_autorizacion }}</td>
            <td class="text-center">{{ $porcentajeAA->fecha_maxima_de_pago }}</td>
            <td class="text-center">{{ $porcentajeAA->porcentaje_de_acciones }}</td>

        {!! Form::open(['route' => ['porcentajeAccionesAccionista.destroy', ':PORCENTAJE_ID'], 'method' => 'DELETE', 'id'=>'form-delete-porcentaje-accionista']) !!}

            <td class="text-center">
                <a type="submit" class="btn btn-danger btn-xs delete-porcentaje">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </a>
                <a href="{{ url('/porcentajeAccionesAccionista/'.$porcentajeAA->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}

        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">Nombre o Razón social</th>
        <th class="text-center">Rut</th>
        <th class="text-center">Total acciones autorizadas</th>
        <th class="text-center">Número de acciones suscritas</th>
        <th class="text-center">Acciones pagadas</th>
        <th class="text-center">Fecha autorización</th>
        <th class="text-center">Fecha máxima de pago</th>
        <th class="text-center">Porcentaje de acciones</th>
    </tr>
  </tfoot>
</table>
