<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatutosRegimenEspecialesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatutos_regimen_especiales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sociedad_id')->unsigned();
            $table->string('tipo')->nullable();
            $table->string('nro_solicitud')->nullable();
            $table->date('fecha_registro')->nullable();;
            $table->string('informado_sii')->nullable();
            $table->string('informado_banco')->nullable();
            $table->string('observaciones')->nullable();
            $table->string('texto_refundido')->nullable();
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
        Schema::dropIfExists('estatutos_regimen_especiales');
    }
}
