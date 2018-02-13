@extends('admin')

@section('myContent')
<h1 class="text-primary">Forma de disolución y liquidación del haber social: {{ $sociedad->razon_social or '' }}</h1>
{!! Form::open([ 'route' => 'forma_disolucion_liquidacion.store', 'method' => 'POST', 'class' => 'update-forma-disolucion-liquidacion-ajax','files' => true]) !!}
	<input type="hidden" name="sociedad_id" value="{{$sociedad->id}}" >
	<div class="form-group col-sm-6">
		<label>Adjunto:</label>
		<input type="file" class="form-control" accept='application/pdf' name="forma_disolucion_liquidacion_adjunto" value="{{ $forma_disolucion_liquidacion->forma_disolucion_liquidacion_adjunto or ''}}" required="true">
	</div>
	<div class="form-group col-sm-6">
		@if(isset($forma_disolucion_liquidacion->forma_disolucion_liquidacion_adjunto))
			<br>
			<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/forma_disolucion_liquidacion/'.$forma_disolucion_liquidacion->forma_disolucion_liquidacion_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
			<br>
			<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>
	<div class="form-group col-sm-12">
		<button type="submit" class="btn btn-success btn-block">Guardar</button>
	</div>
{!! Form::close() !!}

<script src="{{ asset('js/forma_disolucion_liquidacion.js') }}"></script>

@endsection