<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAccionesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acciones', function (Blueprint $table) {
            $table->increments('id');
            $table->string('serie')->nullable();
            $table->integer('cantidad')->nullable();
            $table->string('ordinarias')->nullable();
            $table->string('preferidas')->nullable();
            $table->string('acciones_autorizadas')->nullable();
            $table->string('acciones_suscritas')->nullable();
            $table->string('acciones_pagadas')->nullable();
            $table->string('fecha_autorizacion')->nullable();
            $table->string('fecha_maxima_suscripcion')->nullable();
            $table->string('fecha_maxima_pago')->nullable();
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
        Schema::dropIfExists('acciones');
    }
}
