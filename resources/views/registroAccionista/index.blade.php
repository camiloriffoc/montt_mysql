@extends('admin')

@section('myContent')
<h1 class="text-primary">Registro de accionistas: {{ $sociedad->razon_social or '' }}</h1>
{!! Form::open([ 'route' => 'registro_accionistas.store', 'method' => 'POST', 'class' => 'add-registro-ajax','files' => true]) !!}
	<input type="hidden" name="sociedad_id" value="{{$sociedad->id}}" >
	<div class="form-group col-sm-6">
		<label>Adjunto:</label>
		<input type="file" class="form-control" id="" accept='application/pdf' name="registro_accionista_adjunto" value="{{ $directorio->registro_accionista_adjunto or ''}}">
	</div>
	<div class="form-group col-sm-6">
		@if(isset($registro_accionista_adjunto->registro_accionista_adjunto))
		<br>
		<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/registro_accionistas/'.$registro_accionista_adjunto->registro_accionista_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
		<br>
		<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>
	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>
{!! Form::close() !!}

<div class="row">
	<div class="col-md-12">
		@include('registroAccionista.partials.table')
	</div>
</div>


@endsection