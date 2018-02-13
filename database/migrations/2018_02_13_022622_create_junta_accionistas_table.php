<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJuntaAccionistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('junta_accionistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('acciones_derecho_asistir')->nullable();
            $table->string('serie_acciones_derecho_voto')->nullable();
            $table->string('convocatoria')->nullable();
            $table->string('diario_publicaciones')->nullable();
            $table->string('primera_citacion')->nullable();
            $table->string('primera_citacion_adjunto')->nullable();
            $table->string('segunda_citacion')->nullable();
            $table->string('segunda_citacion_adjunto')->nullable();
            $table->string('quorum_adoptar_acuerdos')->nullable();
            $table->string('quorum_adoptar_acuerdos_adjunto')->nullable();
            $table->string('quorum_especiales')->nullable();
            $table->string('quorum_especiales_adjunto')->nullable();

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
        Schema::dropIfExists('junta_accionistas');
    }
}
