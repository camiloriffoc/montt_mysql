<h1 class="text-primary">Listado de accionistas sujetos a procedimientos de liquidación y de reorganización empresarial</h1>

<table class="table table-bordered" id="table-accionistas-menores-edad">
  <thead>
    <tr>
      <th class="text-center">Nombre o Razón social Accionista</th>
      <th class="text-center">Título</th>
      <th class="text-center">Número de Acciones</th>
      <th class="text-center">Nombre Liquidador designado</th>
    </tr>
  </thead>
  <tbody>
    @foreach($listadoAccionistaLiquidacion as $accionistaLiquidador)
    <tr data-id='{{ $accionistaLiquidador->id }}'>
      <td class="text-center">{{  $accionistaLiquidador->nombre or $accionistaLiquidador->razon_social }}</td>
      <td class="text-center">{{ $accionistaLiquidador->liquidacion_titulo}}</td>
      <td class="text-center">{{ $accionistaLiquidador->liquidacion_numero_acciones }}</td>
      <td class="text-center">{{ $accionistaLiquidador->liquidacion_nombre_liquidador }}</td>
    </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
      <th class="text-center">Nombre o Razón social Accionista</th>
      <th class="text-center">Título</th>
      <th class="text-center">Número de Acciones</th>
      <th class="text-center">Nombre Liquidador designado</th>
    </tr>
  </tfoot>
</table>