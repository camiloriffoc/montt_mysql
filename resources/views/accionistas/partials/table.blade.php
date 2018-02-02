<h1 class="text-primary">Administración de Accionistas: {{ $sociedad->razon_social }}</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">Nombre o Razón Social</th>
        <th class="text-center">Rut</th>
        <th class="text-center">Es Gerente General o Representante</th>
        <th class="text-center">Es Director Titular</th>
        <th class="text-center">Es Director Suplente</th>
        <th class="text-center">Es Presidente del directorio</th>
        <th class="text-center">Fallecido</th>
        <th class="text-center">Menor de Edad</th>
        <th class="text-center">Sujeto a Prenda</th>
        <th class="text-center">Interdicción</th>
        <th class="text-center">Acciones</th>
    </tr>
</thead>

<tbody>
    @foreach($accionistas as $accionista)
    <tr data-id='{{ $accionista->id }}'>
        <td class="text-center">{{ $accionista->razon_social or $accionista->nombre}}</td>
        <td class="text-center">{{ $accionista->rut }}</td>
        <td class="text-center">
            @if(isset($accionista->accionista_gerente_representante) && $accionista->accionista_gerente_representante == 'si')  
                <input type="checkbox" value="" id="check_fallecido" disabled="true" checked="true">
            @else
                <input type="checkbox" value="" id="check_fallecido" disabled="true">
            @endif
        </td>
        <td class="text-center">
            @if(isset($accionista->accionista_director_titular) && $accionista->accionista_director_titular == 'si')  
                <input type="checkbox" value="" id="check_fallecido" disabled="true" checked="true">
            @else
                <input type="checkbox" value="" id="check_fallecido" disabled="true">
            @endif
        </td>
        <td class="text-center">
            @if(isset($accionista->accionista_director_suplente) && $accionista->accionista_director_suplente == 'si')  
                <input type="checkbox" value="" id="check_fallecido" disabled="true" checked="true">
            @else
                <input type="checkbox" value="" id="check_fallecido" disabled="true">
            @endif
        </td>
        <td class="text-center">
            @if(isset($accionista->accionista_presidente_directorio) && $accionista->accionista_presidente_directorio == 'si')  
                <input type="checkbox" value="" id="check_fallecido" disabled="true" checked="true">
            @else
                <input type="checkbox" value="" id="check_fallecido" disabled="true">
            @endif
        </td>
        <td class="text-center">
            @if(isset($accionista->accionista_fallecido) && $accionista->accionista_fallecido == 'si')  
                <input type="checkbox" value="" id="check_fallecido" disabled="true" checked="true">
            @else
                <input type="checkbox" value="" id="check_fallecido" disabled="true">
            @endif
        </td>
        <td class="text-center">
            @if(isset($accionista->accionista_menor_edad) && $accionista->accionista_menor_edad == 'si')  
                <input type="checkbox" value="" id="check_fallecido" disabled="true" checked="true">
            @else
                <input type="checkbox" value="" id="check_fallecido" disabled="true">
            @endif
        </td>
        <td class="text-center">
            @if(isset($accionista->accionista_liquidador) && $accionista->accionista_liquidador == 'si')  
                <input type="checkbox" value="" id="check_fallecido" disabled="true" checked="true">
            @else
                <input type="checkbox" value="" id="check_fallecido" disabled="true">
            @endif
        </td>
        <td class="text-center">
            @if(isset($accionista->accionista_interdiccion) && $accionista->accionista_interdiccion == 'si')  
                <input type="checkbox" value="" id="check_fallecido" disabled="true" checked="true">
            @else
                <input type="checkbox" value="" id="check_fallecido" disabled="true">
            @endif
        </td>

        {!! Form::open(['route' => ['accionistas.destroy', ':ACCIONISTA_ID'], 'method' => 'DELETE', 'id'=>'form-delete-accionista']) !!}

        <td class="text-center">
            <a type="submit" class="btn btn-danger btn-xs delete-accionista" data-confirm="Are you sure?">
                <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
            </a>
            <a href="{{ url('/accionistas/'.$accionista->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas" data-toggle="tooltip" data-placement="top" title="Editar">
                <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
            </a>

            <a href="{{ url('/porcentajeAccionesAccionista/'.$accionista->id) }}" class="btn btn-success btn-xs menu-cuentas" data-toggle="tooltip" data-placement="top" title="Porcentaje Acciones">
                <span class="glyphicon glyphicon-plus-sign" aria-hidden="true"></span>
            </a>

            <a href="{{ url('/tituloAcciones/'.$accionista->id) }}" class="btn btn-success btn-xs menu-cuentas" data-toggle="tooltip" data-placement="top" title="Titulo de Acciones">
                <span class="glyphicon glyphicon-briefcase" aria-hidden="true"></span>
            </a>

            <a href="{{ url('/pacto_accionista/'.$accionista->id) }}" class="btn btn-success btn-xs menu-cuentas" data-toggle="tooltip" data-placement="top" title="Pacto de Accionista">
                <span class="glyphicon glyphicon-th-large" aria-hidden="true"></span>
            </a>

            <a href="{{ url('/subpacto_accionista/'.$accionista->id) }}" class="btn btn-success btn-xs menu-cuentas" data-toggle="tooltip" data-placement="top" title="SubPacto de Accionista">
                <span class="glyphicon glyphicon-th-list" aria-hidden="true"></span>
            </a>




        </td>

        {!! Form::close() !!}

    </tr>
    @endforeach
</tbody>
<tfoot>
    <tr>
        <th class="text-center">Nombre o Razón Social</th>
        <th class="text-center">Rut</th>
        <th class="text-center">Es Gerente General o Representante</th>
        <th class="text-center">Es Director Titular</th>
        <th class="text-center">Es Director Suplente</th>
        <th class="text-center">Es Presidente del directorio</th>
        <th class="text-center">Fallecido</th>
        <th class="text-center">Menor de Edad</th>
        <th class="text-center">Sujeto a Prenda</th>
        <th class="text-center">Interdicción</th>
        <th class="text-center">Acciones</th>
    </tr>
</tfoot>
</table>
<script src="{{ asset('js/accionista.js') }}"></script>