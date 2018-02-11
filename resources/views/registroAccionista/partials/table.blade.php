<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Nombre o Razón Social</th>
        <th class="text-center">Rut</th>
        <th class="text-center">Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($registro_accionistas as $accionista)
    <tr data-id='{{ $accionista->id }}'>
        <td class="text-center">{{ $accionista->razon_social or $accionista->nombre}}</td>
        <td class="text-center">{{ $accionista->rut }}</td>     
        <td class="text-center">
            <a type="submit" class="btn btn-primary btn-xs">
                <span class="" aria-hidden="true">Ver</span>
            </a>
        </td>
    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        <th class="text-center">Nombre o Razón Social</th>
        <th class="text-center">Rut</th>
        <th class="text-center">Acciones</th>
    </tr>
</tfoot>
</table>
<script src="{{ asset('js/registro_accionista.js') }}"></script>