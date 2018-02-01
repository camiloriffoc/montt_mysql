<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoriosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directorios', function (Blueprint $table) {
            $table->increments('id');
            $table->string('cantidad_directores_titulares')->nullable();
            $table->string('con_o_sin_suplentes')->nullable();
            $table->string('vigencia_estatutaria_en_el_cargo')->nullable();
            $table->string('cifra_repartidora_de_eleccion')->nullable();
            $table->date('fecha_nombramiento')->nullable();
            $table->string('renovaciones_totales_o_parcial')->nullable();
            $table->date('epoca_de_renovación')->nullable();
            $table->string('vigencia_comprendida_en_cada_periodo')->nullable();
            $table->string('remunerados')->nullable();
            $table->string('gastos_de_representacion')->nullable();
            $table->string('dietas')->nullable();
            $table->string('otros_beneficios')->nullable();
            $table->string('participaciones')->nullable();
            $table->string('otros_encargos')->nullable();
            $table->string('fijadas_o_no')->nullable();
            $table->string('periodica_o_fecha_fija')->nullable();
            $table->string('convocatoria')->nullable();
            $table->string('citacion')->nullable();
            $table->string('comunicacion')->nullable();
            $table->string('quorums_instalar_sala')->nullable();
            $table->string('quorum_y_mayorías_especiales')->nullable();
            $table->string('mayoria_para_adoptar_acuerdo')->nullable();
            $table->string('voto_dirimente_y_forma_dirimir')->nullable();
            $table->string('actas_de_directorio')->nullable();

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
        Schema::dropIfExists('directorios');
    }
}
