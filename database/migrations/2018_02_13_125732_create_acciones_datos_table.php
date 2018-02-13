<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionesDatosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acciones_datos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('numero_total_acciones')->nullable();
            $table->string('serie_unica_varias')->nullable();
            $table->string('valor_nominal')->nullable();
            $table->string('valor_cada_accion')->nullable();
            $table->string('imprime_laminas_fisicas')->nullable();
            $table->string('numero_acciones_suscritas')->nullable();
            $table->string('numero_acciones_pagadas')->nullable();
            $table->string('gozan_dividendo')->nullable();
            $table->string('gozan_voto')->nullable();

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
        Schema::dropIfExists('acciones_datos');
    }
}
