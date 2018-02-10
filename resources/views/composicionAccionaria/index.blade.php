
@extends('admin')

@section('myContent')
<h1 class="text-primary">Composición Accionaria: {{ $sociedad->razon_social}}</h1>

<div class="row">
	<div class="col-md-12">
		@include('listadoAccionistaCapital.index')
	</div>
</div>
    

@endsection