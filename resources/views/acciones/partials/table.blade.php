<h1 class="text-primary">Administración de Acciones: {{ $sociedad->razon_social }}</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Serie</th>
        <th class="text-center">Ordinarias</th>
        <th class="text-center">Preferida</th>
        <th class="text-center">Autorizadas</th>
        <th class="text-center">Suscritas</th>
        <th class="text-center">Pagadas</th>
        <th class="text-center">Fecha Autorización</th>
        <th class="text-center">Fecha Máxima de Suscripción</th>
        <th class="text-center">Fecha Máxima de Pago</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($acciones as $accion)
        <tr data-id='{{ $accion->id }}'>
            <td class="text-center">{{ $accion->serie }}</td>
            <td class="text-center">{{ $accion->ordinarias}}</td>
            <td class="text-center">{{ $accion->preferidas }}</td>
        	<td class="text-center">{{ $accion->acciones_autorizadas }}</td>
            <td class="text-center">{{ $accion->acciones_suscritas }}</td>
            <td class="text-center">{{ $accion->acciones_pagadas }}</td>
            <td class="text-center">{{ $accion->fecha_autorizacion }}</td>
            <td class="text-center">{{ $accion->fecha_maxima_suscripcion }}</td>
            <td class="text-center">{{ $accion->fecha_maxima_pago }}</td>

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
        <th class="text-center">Serie</th>
        <th class="text-center">Ordinarias</th>
        <th class="text-center">Preferida</th>
        <th class="text-center">Autorizadas</th>
        <th class="text-center">Suscritas</th>
        <th class="text-center">Pagadas</th>
        <th class="text-center">Fecha Autorización</th>
        <th class="text-center">Fecha Máxima de Suscripción</th>
        <th class="text-center">Fecha Máxima de Pago</th>
        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>
<script src="{{ asset('js/acciones.js') }}"></script>