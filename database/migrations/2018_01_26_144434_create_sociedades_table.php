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
            $table->string('razon_social')->nullable();
            $table->string('nombre_fantasia')->nullable();
            $table->string('sa_abierta_o_cerrada')->nullable();
            $table->string('rut')->nullable();
            $table->string('rut_adjunto')->nullable();
            $table->string('pais_incorporacion')->nullable();
            $table->string('telefono_corporativo')->nullable();
            $table->string('website')->nullable();
            $table->string('grupo_empresarial')->nullable();
            $table->string('archivador_fisico_montt_no')->nullable();
            $table->string('duracion')->nullable();
            $table->string('plazo')->nullable();
            $table->date('inicio_actividades')->nullable();
            $table->string('inicio_actividades_adjunto')->nullable();
            $table->string('modificacion_inicio_actividades_adjunto')->nullable();
            $table->date('fecha_modificaciones_inicio_actividades')->nullable();
            $table->string('denominacion_moneda_capital_social')->nullable();
            $table->string('autorizado_moneda_extranjera')->nullable();
            $table->string('tipo_de_contribuyente')->nullable();
            $table->string('regimen_tributario')->nullable();
            $table->string('inscrita_regulador_finaciero')->nullable();
            $table->string('fax')->nullable();
            $table->string('sector')->nullable();
            $table->string('ingresos_anuales')->nullable();
            $table->string('idioma')->nullable();
            $table->string('tipo_de_prorroga')->nullable();
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
