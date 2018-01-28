<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDirectoresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('directores', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('directorio_id')->unsigned();
            $table->string('nombres')->nullable();
            $table->string('apellidos')->nullable();
            $table->string('cargo')->nullable();
            $table->string('fecha_nombramiento')->nullable();
            $table->string('fecha_de_vencimiento')->nullable();
            $table->string('rut')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('comuna_distrito')->nullable();
            $table->string('numero')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('piso_oficina')->nullable();
            $table->string('region')->nullable();
            $table->string('estado')->nullable();
            $table->string('profesion')->nullable();
            $table->string('pais')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('telefono')->nullable();
            $table->string('skype')->nullable();
            $table->string('celular')->nullable();
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
        Schema::dropIfExists('directores');
    }
}
