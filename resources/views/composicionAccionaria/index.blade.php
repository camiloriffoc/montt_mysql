
@extends('admin')

@section('myContent')
<h1 class="text-primary">Composición Accionaria: {{ $sociedad->razon_social}}</h1>

<div class="row">
	<div class="col-md-12">
		@include('listadoAccionistaCapital.index')
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		@include('listadoAccionistaVoto.index')
	</div>
</div>

<div class="row">
	<div class="col-md-12">
		@include('listadoAccionistaDividendo.index')
	</div>
</div>
    

@endsection