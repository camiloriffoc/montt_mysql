<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePoderesApoderadosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('poderes_apoderados', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('sociedad_id')->unsigned();
            $table->string('nombre')->nullable();
            $table->string('cargo')->nullable();
            $table->date('fecha_nombramiento')->nullable();
            $table->date('fecha_revocacion')->nullable();
            $table->string('rut')->nullable();
            $table->string('domicilio')->nullable();
            $table->string('comuna')->nullable();
            $table->string('numero')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('piso')->nullable();
            $table->string('region')->nullable();
            $table->string('estado')->nullable();
            $table->string('pais')->nullable();
            $table->string('codigo_postal')->nullable();
            $table->string('profesion')->nullable();
            $table->string('nacionalidad')->nullable();
            $table->string('estado_civil')->nullable();
            $table->string('correo_electronico')->nullable();
            $table->string('skype')->nullable();
            $table->string('telefono')->nullable();
            $table->string('celular')->nullable();
            $table->string('accionista_que_lo_nombro')->nullable();
            $table->string('renovaciones_en_el_cargo')->nullable();
            $table->string('es_accionista')->nullable();
            $table->string('asistencia')->nullable();
            $table->string('expertise')->nullable();
            $table->string('se_repite_en_filiales')->nullable();
            $table->string('actividad_que_desempeña')->nullable();
            $table->string('idiomas')->nullable();
            $table->string('comisiones_que_integra')->nullable();
            $table->date('fecha_ototrgamiento_poder')->nullable();
            $table->string('vigencia_poder_plazo')->nullable();
            $table->date('periodo_vigencia')->nullable();
            $table->string('forma_de_actuar')->nullable();
            $table->string('tipo_atribuciones')->nullable();
            $table->string('instituciones_tiene_poder')->nullable();
            $table->string('es_director')->nullable();
            $table->string('instrumento_consta_poder')->nullable();
            $table->string('limite_de_facultades')->nullable();
            $table->string('poder_inscrito_cbr')->nullable();
            $table->string('poderes_revocados')->nullable();
            $table->date('fecha_revocacion_de_poder')->nullable();
            $table->string('instrumento_revocacion_de_poder')->nullable();
            $table->string('inscripcion_renovacion_cbr')->nullable();
            $table->string('firma_bancaria')->nullable();
            $table->string('informado_bancos')->nullable();
            $table->string('revocacion_informada_bancos')->nullable();
            $table->string('remuneraciones_de_apoderados')->nullable();
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
        Schema::dropIfExists('poderes_apoderados');
    }
}
