@extends('admin')

@section('myContent')
<br>
<div class="row">
	
	<h2> Agregar Poderes y Apoderados</h2>	
	{{ Form::open(['url' => 'poderes_apoderados/store','class'=>'add-poder', 'method' =>'POST', 'files' => true ]) }}
	 	
	 	<input type="hidden" name="sociedad_id" value="{{$sociedad_id}}">

		@include('poderesApoderados.partials.fields')


	{{ Form::close() }}
   
</div>

@endsection