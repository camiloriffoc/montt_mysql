<h1 class="text-primary">Folio Registro Accionista: {{ $accionista->razon_social or $accionista->nombre }}</h1>
<div class="table-responsive">


    <table class="table table-bordered table-hover" id="MyTable">
      <thead>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Fecha</th>
            <th class="text-center">Número Acciones suscritas o Compradas</th>
            <th class="text-center">Vigentes o Inutilizadas</th>
            <th class="text-center">Número acciones Vendidas</th>
            <th class="text-center">Saldo Acciones</th>
            <th class="text-center">Instrumento de suscripción o Transferencia</th>
            <th class="text-center">No. Título Inutilizado</th>
            <th class="text-center">Nuevo título comprador</th>
            <th class="text-center">Nuevo título Vendedor</th>
            <th class="text-center">Observaciones</th>
            <th class="text-center">Objeto de Usufructo</th>
            <th class="text-center">Objeto de Prenda</th>
            <th class="text-center">Objeto de Embargo y otras restricciones</th>
            <th class="text-center">Objeto o no de Pacto – Subpacto de Accionistas.</th>
            <th class="text-center">Informada suscripción o transferencia al SII.</th>
            <th class="text-center">Acciones</th>

        </tr>
    </thead>
    <tbody>
        @foreach($folio_registro_accionista as $folio)
        <tr data-id='{{ $folio->id }}'>
            <td class="text-center">{{ $folio->numero_folio }}</td>
            <td class="text-center">{{ $folio->fecha }}</td>
            <td class="text-center">{{ $folio->numero_acciones_suscritas_compradas }}</td>
            <td class="text-center">{{ $folio->vigentes_inutilizadas }}</td>
            <td class="text-center">{{ $folio->numero_acciones_vendidas }}</td>
            <td class="text-center">{{ $folio->saldo_acciones }}</td>
            <td class="text-center">
                @if(isset($folio->instrumento_suscripcion_adjunto))
                <p style="margin-top: 1px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio->instrumento_suscripcion_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
                @else
                <br>
                <p style="margin-top: 10px;">No tiene Archivo Adjunto.</p>
                @endif
            </td>
            <td class="text-center">
                
                @if(isset($folio->numero_titulo_inutilizable_adjunto))
                <p style="margin-top: 1px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio->numero_titulo_inutilizable_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
                @else
                <br>
                <p style="margin-top: 10px;">No tiene Archivo Adjunto.</p>
                @endif
            </td>
            </td>
            <td class="text-center">
                @if(isset($folio->nuevo_titulo_comprador_adjunto))
                <p style="margin-top: 1px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio->nuevo_titulo_comprador_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
                @else
                <br>
                <p style="margin-top: 10px;">No tiene Archivo Adjunto.</p>
                @endif
            </td>
            <td class="text-center">
                @if(isset($folio->nuevo_titulo_vendedor_adjunto))
                <p style="margin-top: 1px;"><a target="_blank" href="{{asset('uploads/folio_registro_accionista/'.$folio->nuevo_titulo_vendedor_adjunto) }}"><span style="font-size: 18px;" class="glyphicon glyphicon-file" aria-hidden="true"></span></a></p>
                @else
                <br>
                <p style="margin-top: 10px;">No tiene Archivo Adjunto.</p>
                @endif
            </td>
            <td class="text-center">{{ $folio->observaciones }}</td>
            <td class="text-center">{{ $folio->objeto_usufructo }}</td>
            <td class="text-center">{{ $folio->objeto_prenda }}</td>
            <td class="text-center">{{ $folio->objeto_embargo }}</td>
            <td class="text-center">{{ $folio->objeto_pacto_subpacto }}</td>
            <td class="text-center">{{ $folio->informada_suscripcion_transferencia }}</td>

            {!! Form::open(['route' => ['folioRegistroAccionista.destroy', ':FOLIO_ID'], 'method' => 'DELETE', 'id'=>'form-delete-porcentaje-accionista']) !!}
            <td class="text-center">
                
                <a href="{{ url('/folioRegistroAccionista/'.$folio->id.'/edit') }}" class="btn btn-info btn-xs menu-cuentas">
                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span>
                </a>
            </td>
            {!! Form::close() !!}
        </tr>
        @endforeach
    </tbody>
    <tfoot>
        <tr>
            <th class="text-center">No.</th>
            <th class="text-center">Fecha</th>
            <th class="text-center">Número Acciones suscritas o Compradas</th>
            <th class="text-center">Vigentes o Inutilizadas</th>
            <th class="text-center">Número acciones Vendidas</th>
            <th class="text-center">Saldo Acciones</th>
            <th class="text-center">Instrumento de suscripción o Transferencia</th>
            <th class="text-center">No. Título Inutilizado</th>
            <th class="text-center">Nuevo título comprador</th>
            <th class="text-center">Nuevo título Vendedor</th>
            <th class="text-center">Observaciones</th>
            <th class="text-center">Objeto de Usufructo</th>
            <th class="text-center">Objeto de Prenda</th>
            <th class="text-center">Objeto de Embargo y otras restricciones</th>
            <th class="text-center">Objeto o no de Pacto – Subpacto de Accionistas.</th>
            <th class="text-center">Informada suscripción o transferencia al SII.</th>
            <th class="text-center">Acciones</th>
        </tr>
    </tfoot>
</table>
</div>