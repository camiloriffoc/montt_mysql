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
          Schema::table('sociedades', function($table) {

            $table->dropColumn('comercial_calle');
            $table->dropColumn('comercial_numero');
            $table->dropColumn('comercial_piso_oficina');
            $table->dropColumn('comercial_comuna');
            $table->dropColumn('comercial_ciudad');
            $table->dropColumn('comercial_region');
            $table->dropColumn('comercial_estado');
            $table->dropColumn('comercial_pais');
            $table->dropColumn('comercial_codigo_postal');

            $table->dropColumn('contacto_nombre');
            $table->dropColumn('contacto_telefono');
            $table->dropColumn('contacto_email');
            $table->dropColumn('contacto_celular');
            $table->dropColumn('contacto_skype');


            $table->dropColumn('tributario_calle');
            $table->dropColumn('tributario_numero');
            $table->dropColumn('tributario_piso_oficina');
            $table->dropColumn('tributario_comuna');
            $table->dropColumn('tributario_ciudad');
            $table->dropColumn('tributario_region');
            $table->dropColumn('tributario_estado');
            $table->dropColumn('tributario_pais');
            $table->dropColumn('tributario_codigo_postal');

            $table->dropColumn('comercial_matriz_calle');
            $table->dropColumn('comercial_matriz_numero');
            $table->dropColumn('comercial_matriz_piso_oficina');
            $table->dropColumn('comercial_matriz_comuna');
            $table->dropColumn('comercial_matriz_ciudad');
            $table->dropColumn('comercial_matriz_region');
            $table->dropColumn('comercial_matriz_estado');
            $table->dropColumn('comercial_matriz_pais');
            $table->dropColumn('comercial_matriz_codigo_postal');

            $table->dropColumn('patente_municipal_exenta_pago');
            $table->dropColumn('patente_municipal_comuna');
            $table->dropColumn('patente_municipal_ultima_pagada');
            $table->dropColumn('patente_municipal_ultima_pagada');
            $table->dropColumn('patente_municipal_registra_impaga');

            $table->dropColumn('contador_nombre');
            $table->dropColumn('contador_rut');
            $table->dropColumn('contador_domicilio_calle');
            $table->dropColumn('contador_domicilio_numero');
            $table->dropColumn('contador_domicilio_piso');
            $table->dropColumn('contador_domicilio_comuna');
            $table->dropColumn('contador_domicilio_ciudad');
            $table->dropColumn('contador_domicilio_region');
            $table->dropColumn('contador_domicilio_estado');
            $table->dropColumn('contador_domicilio_pais');
            $table->dropColumn('contador_domicilio_codigo');
            $table->dropColumn('contador_domicilio_profesion');
            $table->dropColumn('contador_domicilio_nacionalidad');
            $table->dropColumn('contador_domicilio_email');
            $table->dropColumn('contador_domicilio_skype');
            $table->dropColumn('contador_domicilio_telefono');
            $table->dropColumn('contador_domicilio_celular');
        });    
    }
}
