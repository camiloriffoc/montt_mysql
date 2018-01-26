<h1 class="text-primary">Administración de Accionistas: {{$sociedad->razon_social}}</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Nombre o Razón Social</th>
        <th class="text-center">Rut</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($accionistas as $accionista)
        <tr>
            <td class="text-center">{{ $accionista->id }}</td>
            <td class="text-center">{{ $accionista->razon_social or $accionista->nombre}}</td>
            <td class="text-center">{{ $accionista->rut }}</td>
        <td class="text-center">{{ $accionista->created_at }}</td>

        {!! Form::open(['route' => ['accionistas.destroy', $accionista->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/accionistas/'.$accionista->id.'/edit') }}" class="btn btn-info btn-xs">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>

        {!! Form::close() !!}

        </tr>
    @endforeach
  </tbody>
  <tfoot>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Razón Social</th>
        <th class="text-center">Rut</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Acciones</th>
    </tr>
  </tfoot>
</table>