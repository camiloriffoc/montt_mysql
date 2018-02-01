@extends('admin')

@section('myContent')
<br>
<div class="row">

	<h2> Eitar Poderes y Apoderados</h2>
		
	{{ Form::open(['url' => 'poderes_apoderados/update','class'=>'add-poder', 'method' =>'POST', 'files' => true ]) }}
	 	
	 	<input type="hidden" name="id" value="{{$poder_id}}">

		@include('poderesApoderados.partials.fields')
		
	{{ Form::close() }}
   
</div>


@endsection