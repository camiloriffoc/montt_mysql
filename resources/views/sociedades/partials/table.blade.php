<h1 class="text-primary">Administración de Sociedades</h1>

<table class="table table-bordered" id="MyTable">
  <thead>
    <tr>
        <th class="text-center">ID</th>
        <th class="text-center">Razón Social</th>
        <th class="text-center">Rut</th>
        <th class="text-center">Fecha</th>
        <th class="text-center">Acciones</th>
    </tr>
  </thead>
  <tbody>
    @foreach($sociedades as $sociedad)
        <tr>
            <td class="text-center">{{ $sociedad->id }}</td>
            <td class="text-center">{{ $sociedad->razon_social }}</td>
            <td class="text-center">{{ $sociedad->rut }}</td>
        <td class="text-center">{{ $sociedad->created_at }}</td>

        {!! Form::open(['route' => ['sociedades.destroy', $sociedad->id], 'method' => 'DELETE']) !!}

            <td class="text-center">
                <button type="submit" class="btn btn-danger btn-xs">
                    <span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
                </button>
                <a href="{{ url('/sociedades/'.$sociedad->id.'/edit') }}" class="btn btn-info btn-xs">
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