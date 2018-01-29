<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePorcentajeAccionesAccionistasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('porcentaje_acciones_accionistas', function (Blueprint $table) {
            $table->increments('id');
            $table->string('total_acciones_autorizadas')->nullable();
            $table->string('numero_acciones_suscritas')->nullable();
            $table->string('acciones_pagadas')->nullable();
            $table->string('fecha_autorizacion')->nullable();
            $table->string('fecha_maxima_de_pago')->nullable();
            $table->string('porcentaje_de_acciones')->nullable();
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
        Schema::dropIfExists('porcentaje_acciones_accionistas');
    }
}
