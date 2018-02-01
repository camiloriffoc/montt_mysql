@extends('admin')

@section('myContent')
<br>
<div class="row">
	
	<button type="button" class="btn btn-info" data-toggle="collapse" data-target="#demo2">Lista de Poderes y Apoderados</button>
	<a href="/poderes_apoderados/create/{{$sociedad_id}}" class="btn btn-info menu-cuentas">Agregar Poder Apoderado</a>
    <div id="demo2" class="collapse">
      @include('poderesApoderados.partials.list')
    </div>

</div>

<script src="{{ asset('js/poderesApoderados.js') }}"></script>

@endsection