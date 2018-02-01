<h1 class="text-primary">Listado de accionistas Fallecidos</h1>

<table class="table table-bordered" id="table-accionistas-fallecidos">
  <thead>
    <tr>
        <th class="text-center">Nombre o Razón social</th>
        <th class="text-center">Número de Acciones</th>
        <th class="text-center">Fecha de Fallecimiento</th>
        <th class="text-center">Certificado Defunción</th>
        <th class="text-center">Designación de Albacea y/o Administrador Proindiviso // Nombre y RUT </th>
        <th class="text-center">Documentos Legales Posesión Efectiva y pago Impuesto Herencia</th>
        <th class="text-center">Cumplido o No los trámites legales de libre transferencia</th>
        <th class="text-center">RUT de comunidad o No.</th>
        <th class="text-center">Nómina de Herederos, RUT y %.</th>
        <th class="text-center">Partición Hereditaria.</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listadoAccionistaFallecidos as $accionistaFallecido)
        <tr data-id='{{ $accionistaFallecido->id }}'>
            <td class="text-center">{{	$accionistaFallecido->nombre or $porcentajeAA->razon_social }}</td>
            <td class="text-center">{{ $accionistaFallecido->fallecido_numero_acciones}}</td>
            <td class="text-center">{{ $accionistaFallecido->fallecido_fecha_fallecimiento }}</td>
            <td class="text-center">Certificado Defunción</td>
            <td class="text-center">{{ $accionistaFallecido->fallecido_designacion_albacea_administrador }}</td>
            <td class="text-center">Documentos Legales </td>
            <td class="text-center">{{ $accionistaFallecido->fallecido_tramites_libre_transferencia }}</td>
            <td class="text-center">{{ $accionistaFallecido->fallecido_rut_comunidad }}</td>
            <td class="text-center">{{ $accionistaFallecido->fallecido_nomina_herederos }}</td>
            <td class="text-center">Partición Hereditaria </td>

        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">Nombre o Razón social</th>
        <th class="text-center">Número de Acciones</th>
        <th class="text-center">Fecha de Fallecimiento</th>
        <th class="text-center">Certificado Defunción</th>
        <th class="text-center">Designación de Albacea y/o Administrador Proindiviso // Nombre y RUT </th>
        <th class="text-center">Documentos Legales Posesión Efectiva y pago Impuesto Herencia</th>
        <th class="text-center">Cumplido o No los trámites legales de libre transferencia</th>
        <th class="text-center">RUT de comunidad o No.</th>
        <th class="text-center">Nómina de Herederos, RUT y %.</th>
        <th class="text-center">Partición Hereditaria.</th>
    </tr>
  </tfoot>
</table>