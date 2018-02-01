<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstatutosRegimenGeneralesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estatutos_regimen_generales', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sociedad_id')->unsigned();
            $table->string('tipo')->nullable();
            $table->string('fecha_repertorio_notaria')->nullable();
            $table->string('inscripcion_registro')->nullable();
            $table->string('publicacion')->nullable();
            $table->string('protocolizacion')->nullable();
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
        Schema::dropIfExists('estatutos_regimen_generales');
    }
}
