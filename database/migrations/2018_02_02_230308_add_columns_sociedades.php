<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddColumnsSociedades extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('sociedades', function($table) {
            $table->string('comercial_calle')->nullable();
            $table->string('comercial_numero')->nullable();
            $table->string('comercial_piso_oficina')->nullable();
            $table->string('comercial_comuna')->nullable();
            $table->string('comercial_ciudad')->nullable();
            $table->string('comercial_region')->nullable();
            $table->string('comercial_estado')->nullable();
            $table->string('comercial_pais')->nullable();
            $table->string('comercial_codigo_postal')->nullable();

            $table->string('contacto_nombre')->nullable();
            $table->string('contacto_telefono')->nullable();
            $table->string('contacto_email')->nullable();
            $table->string('contacto_celular')->nullable();
            $table->string('contacto_skype')->nullable();


            $table->string('tributario_calle')->nullable();
            $table->string('tributario_numero')->nullable();
            $table->string('tributario_piso_oficina')->nullable();
            $table->string('tributario_comuna')->nullable();
            $table->string('tributario_ciudad')->nullable();
            $table->string('tributario_region')->nullable();
            $table->string('tributario_estado')->nullable();
            $table->string('tributario_pais')->nullable();
            $table->string('tributario_codigo_postal')->nullable();

            $table->string('comercial_matriz_calle')->nullable();
            $table->string('comercial_matriz_numero')->nullable();
            $table->string('comercial_matriz_piso_oficina')->nullable();
            $table->string('comercial_matriz_comuna')->nullable();
            $table->string('comercial_matriz_ciudad')->nullable();
            $table->string('comercial_matriz_region')->nullable();
            $table->string('comercial_matriz_estado')->nullable();
            $table->string('comercial_matriz_pais')->nullable();
            $table->string('comercial_matriz_codigo_postal')->nullable();

            $table->string('patente_municipal_exenta_pago')->nullable();
            $table->string('patente_municipal_enrolado_patente')->nullable();
            $table->string('patente_municipal_comuna')->nullable();
            $table->string('patente_municipal_ultima_pagada')->nullable();
            $table->string('patente_municipal_registra_impaga')->nullable();

            $table->string('contador_nombre')->nullable();
            $table->string('contador_rut')->nullable();
            $table->string('contador_domicilio_calle')->nullable();
            $table->string('contador_domicilio_numero')->nullable();
            $table->string('contador_domicilio_piso')->nullable();
            $table->string('contador_domicilio_comuna')->nullable();
            $table->string('contador_domicilio_ciudad')->nullable();
            $table->string('contador_domicilio_region')->nullable();
            $table->string('contador_domicilio_estado')->nullable();
            $table->string('contador_domicilio_pais')->nullable();
            $table->string('contador_domicilio_codigo')->nullable();
            $table->string('contador_domicilio_profesion')->nullable();
            $table->string('contador_domicilio_nacionalidad')->nullable();
            $table->string('contador_domicilio_email')->nullable();
            $table->string('contador_domicilio_skype')->nullable();
            $table->string('contador_domicilio_telefono')->nullable();
            $table->string('contador_domicilio_celular')->nullable();
        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {

    }
}
