<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFolioRegistroAccionistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('folio_registro_accionistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_folio')->nullable();
            $table->date('fecha')->nullable();
            $table->string('numero_acciones_suscritas_compradas')->nullable();
            $table->string('vigentes_inutilizadas')->nullable();
            $table->string('numero_acciones_vendidas')->nullable();
            $table->string('saldo_acciones')->nullable();
            $table->string('instrumento_suscripcion_adjunto')->nullable();
            $table->string('numero_titulo_inutilizable_adjunto')->nullable();
            $table->string('nuevo_titulo_comprador_adjunto')->nullable();
            $table->string('nuevo_titulo_vendedor_adjunto')->nullable();
            $table->string('observaciones')->nullable();


            $table->enum('objeto_usufructo', array('si','no'))->default('no');
            $table->enum('objeto_prenda', array('si','no'))->default('no');
            $table->enum('objeto_embargo', array('si','no'))->default('no');
            $table->enum('objeto_pacto_subpacto', array('si','no'))->default('no');
            $table->enum('informada_suscripcion_transferencia', array('si','no'))->default('no');

            //USUFRUCTO
            $table->string('titulo_acciones_usufructo')->nullable();
            $table->string('numero_acciones_usufructo')->nullable();
            $table->date('fecha_usufructo')->nullable();
            $table->string('fecha_usufructo_adjunto')->nullable();
            $table->string('con_sin_asignacion_usufructo')->nullable();

            //PRENDA DE ACCIONES
            $table->string('titulo_acciones_prenda')->nullable();
            $table->string('numero_acciones_prenda')->nullable();
            $table->date('fecha_prenda')->nullable();
            $table->string('fecha_prenda_adjunto')->nullable();
            $table->string('con_sin_asignacion_voto_prenda')->nullable();
            $table->string('con_sin_asignacion_dividendo_prenda')->nullable();

            //EMBARGO MEDIDA JUDICIAL
            $table->string('titulo_embargo')->nullable();
            $table->string('numero_acciones_embargo')->nullable();
            $table->date('fecha_embargo')->nullable();
            $table->string('fecha_embargo_adjunto')->nullable();
            $table->string('con_sin_derecho_dividendo_embargo')->nullable();

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('folio_registro_accionistas');
    }
}
