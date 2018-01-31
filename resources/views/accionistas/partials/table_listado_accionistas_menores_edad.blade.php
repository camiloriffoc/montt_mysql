<h1 class="text-primary">Listado de accionistas Menores de Edad</h1>

<table class="table table-bordered" id="table-accionistas-menores-edad">
  <thead>
    <tr>
        <th class="text-center">Nombre Accionistas</th>
        <th class="text-center">Título</th>
        <th class="text-center">Número de Acciones</th>
        <th class="text-center">Fecha Nacimiento</th>
        <th class="text-center">Fecha Mayoría de Edad</th>
        <th class="text-center">Representante Legal / Nombre y RUT. </th>
        <th class="text-center">Si hay o no sentencia que se lo asigne a otro en específico</th>
    </tr>
</thead>
<tbody>
    @foreach($listadoAccionistaMenorEdad as $accionistaMenorEdad)
    <tr data-id='{{ $accionistaMenorEdad->id }}'>
        <td class="text-center">{{  $accionistaMenorEdad->nombre or $accionistaMenorEdad->razon_social }}</td>
        <td class="text-center">{{ $accionistaMenorEdad->menor_titulo}}</td>
        <td class="text-center">{{ $accionistaMenorEdad->menor_numero_acciones }}</td>
        <td class="text-center">{{ $accionistaMenorEdad->menor_fecha_nacimiento }}</td>
        <td class="text-center">{{ $accionistaMenorEdad->menor_fecha_mayoria_edad }}</td>
        <td class="text-center">{{ $accionistaMenorEdad->menor_representante_legal }}</td>
        <td class="text-center">{{ $accionistaMenorEdad->menor_sentencia_especifica }}</td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
      <th class="text-center">Nombre Accionistas</th>
      <th class="text-center">Título</th>
      <th class="text-center">Número de Acciones</th>
      <th class="text-center">Fecha Nacimiento</th>
      <th class="text-center">Fecha Mayoría de Edad</th>
      <th class="text-center">Representante Legal / Nombre y RUT. </th>
      <th class="text-center">Si hay o no sentencia que se lo asigne a otro en específico</th>
  </tr>
</tfoot>
</table>