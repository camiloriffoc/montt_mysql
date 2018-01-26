<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSociedadesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('sociedades', function (Blueprint $table) {
            $table->increments('id');
            $table->string('razon_social');
            $table->string('nombre_fantasia');
            $table->string('sa_abierta_o_cerrada');
            $table->string('rut');
            $table->string('pais_incorporacion');
            $table->string('telefono_corporativo');
            $table->string('website');
            $table->string('grupo_empresarial');
            $table->string('archivador_fisico_montt_no');
            $table->string('duracion');
            $table->string('plazo');
            $table->string('inicio_actividades');
            $table->string('modificaciones_inicio_actividades');
            $table->string('fecha_modificaciones_inicio_actividades');
            $table->string('denominacion_moneda_capital_social');
            $table->string('autorizado_moneda_extranjera');
            $table->string('tipo_de_contribuyente');
            $table->string('regimen_tributario');
            $table->string('inscrita_regulador_finaciero');
            $table->string('fax');
            $table->string('sector');
            $table->string('ingresos_anuales');
            $table->string('idioma');
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
        Schema::dropIfExists('sociedades');
    }
}
