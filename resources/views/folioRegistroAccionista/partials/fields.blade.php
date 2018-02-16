<!-- ID del Accionista -->
<input type="hidden" name="accionista_id" value="{{$accionista->id or $folio_registro_accionista->accionista_id }}">

<div class="form-group col-sm-6">
	<label>Número:</label>
	<input type="text" class="form-control" name="numero_folio" value="{{ $folio_registro_accionista->numero_folio or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Fecha:</label>
	<input type="date" class="form-control" name="fecha" value="{{ $folio_registro_accionista->fecha or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Número Acciones suscritas o Compradas:</label>
	<input type="text" class="form-control" name="numero_acciones_suscritas_compradas" value="{{ $folio_registro_accionista->numero_acciones_suscritas_compradas or '' }}">
</div>	

<div class="form-group col-sm-6">
	<label>Vigentes o Inutilizadas:</label>
	{{ Form::select('vigentes_inutilizadas',['Vigentes' => 'Vigentes', 'Inutilizadas' => 'Inutilizadas'],isset($folio_registro_accionista->vigentes_inutilizadas) ? $folio_registro_accionista->vigentes_inutilizadas : 'Vigentes', array('class' => 'form-control')) }}
</div>

<div class="form-group col-sm-6">
	<label>Número acciones Vendidas:</label>
	<input type="text" class="form-control" name="numero_acciones_vendidas" value="{{ $folio_registro_accionista->numero_acciones_vendidas or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Saldo Acciones:</label>
	<input type="text" class="form-control" name="saldo_acciones" value="{{ $folio_registro_accionista->saldo_acciones or '' }}">
</div>

<div class="form-group col-sm-12">
	<label>Instrumento de suscripción o Transferencia:</label>
	<input type="file" class="form-control" accept='application/pdf' name="instrumento_suscripcion_adjunto" value="{{ $folio_registro_accionista->instrumento_suscripcion_adjunto or ''}}">
	<div class="form-group col-sm-6">
		@if(isset($folio_registro_accionista->instrumento_suscripcion_adjunto))
		<br>
		<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio_registro_accionista->instrumento_suscripcion_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
		<br>
		<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>
</div>

<div class="form-group col-sm-12">
	<label>No. Título Inutilizado:</label>
	<input type="file" class="form-control" accept='application/pdf' name="numero_titulo_inutilizable_adjunto" value="{{ $folio_registro_accionista->numero_titulo_inutilizable_adjunto or ''}}">
	<div class="form-group col-sm-6">
		@if(isset($folio_registro_accionista->numero_titulo_inutilizable_adjunto))
		<br>
		<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio_registro_accionista->numero_titulo_inutilizable_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
		<br>
		<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>
</div>

<div class="form-group col-sm-12">
	<label>Nuevo título comprador:</label>
	<input type="file" class="form-control" accept='application/pdf' name="nuevo_titulo_comprador_adjunto" value="{{ $folio_registro_accionista->nuevo_titulo_comprador_adjunto or ''}}">
	<div class="form-group col-sm-6">
		@if(isset($folio_registro_accionista->nuevo_titulo_comprador_adjunto))
		<br>
		<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio_registro_accionista->nuevo_titulo_comprador_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
		<br>
		<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>
</div>

<div class="form-group col-sm-12">
	<label>Nuevo título Vendedor:</label>
	<input type="file" class="form-control" accept='application/pdf' name="nuevo_titulo_vendedor_adjunto" value="{{ $folio_registro_accionista->nuevo_titulo_vendedor_adjunto or ''}}">
	<div class="form-group col-sm-6">
		@if(isset($folio_registro_accionista->nuevo_titulo_vendedor_adjunto))
		<br>
		<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio_registro_accionista->nuevo_titulo_vendedor_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
		@else
		<br>
		<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
		@endif
	</div>
</div>

<div class="form-group col-sm-6">
	<label>Observaciones:</label>
	<input type="text" class="form-control" name="observaciones" value="{{ $folio_registro_accionista->observaciones or '' }}">
</div>

<div class="form-group col-sm-6">
	<label>Objeto de Usufructo:</label>
	{{ Form::select('objeto_usufructo',['no' => 'No', 'si' => 'Si'],isset($folio_registro_accionista->objeto_usufructo) ? $folio_registro_accionista->objeto_usufructo : 'no', array('class' => 'form-control control-accionista-usufructo')) }}
</div>

<div class="form-group col-sm-6">
	<label>Objeto de Prenda:</label>
	{{ Form::select('objeto_prenda',['no' => 'No', 'si' => 'Si'],isset($folio_registro_accionista->objeto_prenda) ? $folio_registro_accionista->objeto_prenda : 'no', array('class' => 'form-control control-accionista-prenda')) }}
</div>

<div class="form-group col-sm-6">
	<label>Objeto de Embargo y otras restricciones:</label>
	{{ Form::select('objeto_embargo',['no' => 'No', 'si' => 'Si'],isset($folio_registro_accionista->objeto_embargo) ? $folio_registro_accionista->objeto_embargo : 'no', array('class' => 'form-control control-accionista-embargo')) }}
</div>

<div class="form-group col-sm-6">
	<label>Objeto o no de Pacto – Subpacto de Accionistas:</label>
	{{ Form::select('objeto_pacto_subpacto',['no' => 'No', 'si' => 'Si'],isset($folio_registro_accionista->objeto_pacto_subpacto) ? $folio_registro_accionista->objeto_pacto_subpacto : 'no', array('class' => 'form-control control-accionista-pacto')) }}
</div>

<div class="form-group col-sm-6">
	<label>Informada suscripción o transferencia al SII:</label>
	{{ Form::select('informada_suscripcion_transferencia',['no' => 'No', 'si' => 'Si'],isset($folio_registro_accionista->informada_suscripcion_transferencia) ? $folio_registro_accionista->informada_suscripcion_transferencia : 'no', array('class' => 'form-control control-accionista-embargo')) }}
</div>


<div class="row">

	<div class="col-md-12 div-accionista-usufructo">
		<h4>Datos Usufructo</h4>

		<div class="form-group col-sm-6">
			<label>Título Acciones en Usufructo:</label>
			<input type="text" class="form-control" name="titulo_acciones_usufructo" value="{{ $folio_registro_accionista->titulo_acciones_usufructo or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>No. Acciones en Usufructo:</label>
			<input type="date" class="form-control" name="numero_acciones_usufructo" value="{{ $folio_registro_accionista->numero_acciones_usufructo or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>Fecha Usufructo:</label>
			<input type="date" class="form-control" name="fecha_usufructo" value="{{ $folio_registro_accionista->fecha_usufructo or '' }}">
		</div>

		<div class="form-group col-sm-12">
			<label>Fecha Usufructo (Adjunto):</label>
			<input type="file" class="form-control" accept='application/pdf' name="fecha_usufructo_adjunto" value="{{ $folio_registro_accionista->fecha_usufructo_adjunto or ''}}">
			<div class="form-group col-sm-6">
				@if(isset($folio_registro_accionista->fecha_usufructo_adjunto))
				<br>
				<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio_registro_accionista->fecha_usufructo_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
				@else
				<br>
				<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
				@endif
			</div>
		</div>

		<div class="form-group col-sm-6">
			<label>Con o sin Asignación de Derecho a Voto usufructuario, o en su defecto en conjunto:</label>
			<input type="text" class="form-control" name="con_sin_asignacion_usufructo" value="{{ $folio_registro_accionista->con_sin_asignacion_usufructo or '' }}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 div-accionista-prenda">
		<h4>Prendas de Acciones</h4>
		
		<div class="form-group col-sm-6">
			<label>Título Acciones Prendadas:</label>
			<input type="text" class="form-control" name="titulo_acciones_prenda" value="{{ $folio_registro_accionista->titulo_acciones_prenda or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>No. Acciones Prendadas:</label>
			<input type="date" class="form-control" name="numero_acciones_prenda" value="{{ $folio_registro_accionista->numero_acciones_prenda or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>Fecha Prenda:</label>
			<input type="date" class="form-control" name="fecha_prenda" value="{{ $folio_registro_accionista->fecha_prenda or '' }}">
		</div>
		<div class="form-group col-sm-12">
			<label>Fecha Prenda (Adjunto):</label>
			<input type="file" class="form-control" accept='application/pdf' name="fecha_prenda_adjunto" value="{{ $folio_registro_accionista->fecha_prenda_adjunto or ''}}">
			<div class="form-group col-sm-6">
				@if(isset($folio_registro_accionista->fecha_prenda_adjunto))
				<br>
				<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio_registro_accionista->fecha_prenda_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
				@else
				<br>
				<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
				@endif
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label>Con o sin Asignación de Derecho a Voto Acreedor Prendario:</label>
			<input type="text" class="form-control" name="con_sin_asignacion_voto_prenda" value="{{ $folio_registro_accionista->con_sin_asignacion_voto_prenda or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>Con o sin Asignación de Derecho a Dividendo al Acreedor Prendario:</label>
			<input type="text" class="form-control" name="con_sin_asignacion_dividendo_prenda" value="{{ $folio_registro_accionista->con_sin_asignacion_dividendo_prenda or '' }}">
		</div>
	</div>
</div>

<div class="row">
	<div class="col-md-12 div-accionista-embargo">
		<h4>Embargo o medidas prejudiciales de acciones</h4>
		
		<div class="form-group col-sm-6">
			<label>Título:</label>
			<input type="text" class="form-control" name="titulo_embargo" value="{{ $folio_registro_accionista->titulo_embargo or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>No. Acciones Embargadas o sujetas a Medida Prejudicial:</label>
			<input type="date" class="form-control" name="numero_acciones_embargo" value="{{ $folio_registro_accionista->numero_acciones_embargo or '' }}">
		</div>

		<div class="form-group col-sm-6">
			<label>Fecha Embargo o medida precautoria:</label>
			<input type="date" class="form-control" name="fecha_embargo" value="{{ $folio_registro_accionista->fecha_embargo or '' }}">
		</div>
		<div class="form-group col-sm-12">
			<label>Fecha Embargo o medida precautoria (Adjunto):</label>
			<input type="file" class="form-control" accept='application/pdf' name="fecha_embargo_adjunto" value="{{ $folio_registro_accionista->fecha_embargo_adjunto or ''}}">
			<div class="form-group col-sm-6">
				@if(isset($folio_registro_accionista->fecha_embargo_adjunto))
				<br>
				<p style="margin-top: 20px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio_registro_accionista->fecha_embargo_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
				@else
				<br>
				<p style="margin-top: 20px;">No tiene Archivo Adjunto.</p>
				@endif
			</div>
		</div>
		<div class="form-group col-sm-6">
			<label>Con o sin Derecho a Dividendo:</label>
			<input type="text" class="form-control" name="con_sin_derecho_dividendo_embargo" value="{{ $folio_registro_accionista->con_sin_derecho_dividendo_embargo or '' }}">
		</div>
	</div>
</div>