<h1 class="text-primary">Porcentaje de acciones por accionista</h1>

<table class="table table-bordered" id="table-porcentaje-accionistas">
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
            <td class="text-center">{{	$porcentajeAA->nombre or $porcentajeAA->razon_social }}</td>
            <td class="text-center">{{ $porcentajeAA->rut}}</td>
            <td class="text-center">{{ $porcentajeAA->total_acciones_autorizadas }}</td>
            <td class="text-center">{{ $porcentajeAA->numero_acciones_suscritas }}</td>
            <td class="text-center">{{ $porcentajeAA->acciones_pagadas }}</td>
            <td class="text-center">{{ $porcentajeAA->fecha_autorizacion }}</td>
            <td class="text-center">{{ $porcentajeAA->fecha_maxima_de_pago }}</td>
            <td class="text-center">{{ $porcentajeAA->porcentaje_de_acciones }}</td>

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
