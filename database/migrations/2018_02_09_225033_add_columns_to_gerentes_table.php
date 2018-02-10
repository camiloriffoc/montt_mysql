<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsToGerentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('gerentes_generales', function($table) {
            $table->string('accionistas_que_lo_nombro')->nullable();
            $table->string('vigencia')->nullable();
            $table->string('renovaciones')->nullable();
            $table->string('asistencia')->nullable();
            $table->string('expertise')->nullable();
            $table->string('repeticion_de_filiales')->nullable();
            $table->string('idiomas')->nullable();
            $table->string('actividad_que_desempeña')->nullable();
            $table->string('comisiones_que_integra')->nullable();
            $table->string('con_o_sin_poder')->nullable();
            $table->string('es_gerente_general_o_representante')->nullable();
            $table->string('participacion_grupo_externo')->nullable();
            $table->string('presidente_del_directorio')->nullable();
            $table->string('es_secretario')->nullable();

            
           
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
